<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtenermos todos los articulos
        $articles = Article::all();

        //Metodo Viejo
        //return view('home', ['articles' => $articles]);
        //Metodo Nuevo
        return view ('home', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Muestra la vista para crear un nuevo articulo
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Guarda el nuevo articulo
        Article::create($request->all());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Muestra la vista para editar un articulo
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('/');
    }
}
