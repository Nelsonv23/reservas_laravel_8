<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evento.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'nombre' => 'required',
            'departamento' => 'required',
            'telefono' => 'required',
            'fecha' => 'required',
        ]);

        // Crear un nuevo evento con los datos recibidos
        $evento = new Evento();
        $evento->nombre = $request->input('nombre');
        $evento->departamento = $request->input('departamento');
        $evento->telefono = $request->input('telefono');
        $evento->fecha = $request->input('fecha');

        // Guardar el evento en la base de datos
        $evento->save();

        // Almacenar el mensaje en la sesión flash
        Session::flash('success', 'Los datos se han guardado correctamente.');

        // Retornar una respuesta de éxito
        return redirect()->route('evento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
