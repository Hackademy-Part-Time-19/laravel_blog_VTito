<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ArticleStoreRequest;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('pages.articoli', ['articoli' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.article-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request)
    {
        $validated = $request->validated();

        $article = Article::create($validated);

        if ($request->hasFile('image')) {

            $path = 'public/images';

            $name = $article['id'] . '.' . 'copertina' . '.' . $request->file('image')->extension();

            $file = $request->file('image')->storeAs($path, $name);

            $image = $path . '/' . $name;

            $article->image = $image;

            $article->save();
        }

        return redirect()->back()->with(['success' => 'Articolo inserito con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $articles = Article::find($id);

        return view('pages.dettaglio', ['articolo' => $articles]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);

        return view('edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleStoreRequest $request, string $id)
    {
        $article = Article::find($id);

        $validated = $request->validated();

        $article->update($validated);


        if ($request->hasFile('image')) {

            $path = 'public/images';

            $name = $article['id'] . uniqid() . '.' . $request->file('image')->extension();

            $file = $request->file('image')->storeAs($path, $name);

            $image = $path . '/' . $name;

            $article->image = $image;

            $article->save();
        }

        return redirect()->back()->with(['success' => 'Articolo modificato con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);

        $article->delete();

        Storage::delete($article->image);

        return redirect()->back()->with(['success' => 'Articolo cancellato con successo']);
    }

    public function byCategory($category)
    {
        $articlesByCategory = Article::where('category', $category)->get();

        return view('pages.articoli-categorie', ['articoli' => $articlesByCategory]);
    }
}
