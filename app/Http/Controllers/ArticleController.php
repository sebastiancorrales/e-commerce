<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles  = Article::all();
        return view('Article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Article.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $article = new Article();
        $article->categoria = $request->get('categoria');
        $article->nombre_persona = $request->get('nombre_persona');
        $article->nombre_articulo = $request->get('nombre_articulo');
        $article->descripcion = $request->get('descripcion');
        $article->valor_envio = $request->get('valor_envio');
        $article->fecha_entrega = $request->get('fecha_entrega');
        $article->telefono = $request->get('telefono');
        $article->email = $request->get('email');
        $article->direccion_destino = $request->get('direccion_destino');
        $article->estado = $request->get('estado');
        $article->sucursal = $request->get('sucursal');
        $article->save();

        return view('Article.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
        $article = Article::findOrFail($article);
        return view('Article.detail', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('Article.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
