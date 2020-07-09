<?php

namespace App\Http\Controllers;

use App\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales = Sucursal::all();
        return view('Sucursal.index', compact('sucursales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sucursal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Sucursal = new Sucursal();
        $Sucursal->direccion = $request->get('direccion');
        $Sucursal->nombre = $request->get('nombre');
        $Sucursal->telefono = $request->get('telefono');
        $Sucursal->horarios = $request->get('horarios');
        $Sucursal->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show($sucursal)
    {
        $sucursal = Sucursal::findOrFail($sucursal);
        return view('Sucursal.detail', compact('sucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit($sucursal)
    {
        $sucursal = Sucursal::findOrFail($sucursal);

        return view('Sucursal.edit', compact('sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sucursal)
    {
        $sucursal = Sucursal::findOrFail($sucursal);

        $sucursal->direccion = $request->get('direccion');
        $sucursal->nombre = $request->get('nombre');
        $sucursal->telefono = $request->get('telefono');
        $sucursal->horarios = $request->get('horarios');
        $sucursal->save();

        return redirect('/sucursal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sucursal::destroy($id);
        return redirect()->back()
            ->with('status', "La sucursal ha sido eliminado con éxito.");
    }
}
