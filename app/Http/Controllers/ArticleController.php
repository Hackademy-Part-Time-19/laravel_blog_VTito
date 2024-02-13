<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('pages.articoli', ['articoli' => $articles]);
    }

    public function show($id)
    {
        $articles = Article::find($id);

        return view('pages.dettaglio', ['articolo' => $articles]);
    }

    public function category($category)
    {
        $articoliCategory = Article::where('category', $category)->get();

        return view('pages.articoli-categorie', ['articoli' => $articoliCategory]);
    }

    public function store(ArticleStoreRequest $request)
    {
        /*   $article = new Article;
        $article->title = $request->title;
        $article->category = $request->title;
        $article->description = $request->title; */

        /* $article->save(); */

        $validated = $request->validated();

        $article = Article::create($validated);


        if($request->hasFile('image')){

            $path = 'public/images';

            $name = $article['id'] . '.' . 'copertina' . '.' . $request->file('image')->extension() ;

            $file = $request->file('image')->storeAs($path,$name);

            $image = $path . '/' . $name;

            $article->image = $image;

            $article->save();

        }

        return redirect()->back()->with(['success' => 'Articolo inserito con successo']);
    }

    public function create()
    {
        return view('pages.article-create');
    }
}
