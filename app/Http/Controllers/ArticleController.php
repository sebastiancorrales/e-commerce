<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Sucursal;
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
        $sucursals = Sucursal::all();
        return view('Article.index', compact( 'sucursals','articles'));
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

        return back();


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
    public function edit($article)
    {
        $article = Article::findOrFail($article);
        $sucursals = Sucursal::all();
        return view('Article.edit', compact('article', 'sucursals'));
    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $article)
    {
        $article = Article::findOrFail($article);

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

        return redirect('/article');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->back()
            ->with('status', "El articulo ha sido eliminado con éxito.");
    }
}
