<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ArticleStoreRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('pages.articoli', ['articles' => $articles]);
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
    public function store(Request $request)
    {
        $user = Auth::user();

        /*   $validated = $request->validated(); */

        $article = $user->articles()->create($request->all());

        $article->categories()->attach($request->categories);

        $article->image = "public/images/default.jpg";

        if ($request->hasFile('image')) {

            $path = 'public/images';

            $name = $article['id'] . uniqid() . '.' . $request->file('image')->extension();

            $file = $request->file('image')->storeAs($path, $name);

            $image = $path . '/' . $name;

            $article->image = $image;
        }

        $article->save();

        return redirect()->back()->with(['success' => 'Articolo inserito con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $articles = Article::find($id);

        return view('pages.dettaglio', ['article' => $articles]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);

        return view('pages.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);

        /* $validated = $request->validated(); */

        $article->update($request->all());

        /* $article->categories->detach();
        $article->categories()->attach($request->categories); */

        $article->categories()->sync($request->categories);

        $article->image = "public/images/default.jpg";

        if ($request->hasFile('image')) {

            $path = 'public/images';

            $name = $article['id'] . uniqid() . '.' . $request->file('image')->extension();

            $file = $request->file('image')->storeAs($path, $name);

            $image = $path . '/' . $name;

            $article->image = $image;
        }

        $article->save();

        return redirect()->back()->with(['success' => 'Articolo modificato con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);

        $article->categories()->detach();

        $article->delete();

        if (!($article->image == "public/images/default.jpg")) {

            Storage::delete($article->image);
        }

        return redirect()->back()->with(['success' => 'Articolo cancellato con successo']);
    }

    public function byCategory(Category $category)
    {
        return view('pages.articoli-categorie', compact('category'));
    }

    public function showUser()
    {
        $articles = auth()->user()->articles;

        return view('user.show', compact('articles'));
    }
}
