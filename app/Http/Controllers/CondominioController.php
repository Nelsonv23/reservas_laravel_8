<?php

namespace App\Http\Controllers;

use App\Models\Condominio;
use Illuminate\Http\Request;

class CondominioController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condominios = Condominio::all();
        return view('condominio.index', compact('condominios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('condominio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required'
        ]);
        Condominio::create($request->all());
        return redirect()->route('condominio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Condominio $condominio)
    {
        $condominio = Condominio::findOrFail($id);
        return view('condominio.edit', compact('condominios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Condominio $condominio)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required'
        ]);
        $condominio->update($request->all());
        return redirect()->route('condominio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condominio $condominio)
    {
        $condominio->delete();
        return redirect()->route('condominio.index');
    }
}
