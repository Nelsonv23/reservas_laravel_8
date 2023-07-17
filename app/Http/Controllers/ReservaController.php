<?php

namespace App\Http\Controllers;
use App\Models\Condominio;
use App\Models\Evento;
use App\Models\Reservas;
use Illuminate\Http\Request;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reservas::all();
        $eventos = Evento::all();
        return view('reserva.index', compact('reservas', 'eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condominios = Condominio::all();
        return view('reserva.create', compact('condominios'));
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
            'departamento' => 'required',
            'condominio' => 'required',
            'fecha' => 'required',
        ]);
        Reservas::create($request->all());
        return redirect()->route('reserva.index')->with('success', 'Reserva Creada Correctamente');
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
    public function edit($id, Reservas $reserva)
    {
        $reserva = Reservas::findOrFail($id);
        return view('reserva.edit', compact('reserva'))->with('success', 'Reserva actualizada correctamente');
    }

    /**
     * Update the specified resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reserva = Reservas::findOrFail($id);
        $data = $request->only('departamento', 'condominio', 'fecha');
        $reserva->update($data);
        return redirect()->route('reserva.index')->with('success', 'Reserva actualizada correctamente', 100);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservas $reserva)
    {
        $reserva->delete();
        return redirect()->route('reserva.index')->with('success', 'Reserva eliminada correctamente');
    }
}
