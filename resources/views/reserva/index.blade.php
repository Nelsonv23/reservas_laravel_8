@extends('layouts.app', ['activePage' => 'reservas', 'titlePage' => __('Listado De Reservas')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 text-left">
                        <a href="" class="btn btn-info">Crear Reserva</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Reservas Enero</h4>
                        <p class="card-category"> Listado reservas mes enero</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Condominio</th>
                                    <th>Departamento</th>
                                    <th>Fecha</th>
                                </thead>
                                <tbody>
                                    @foreach ($reservas as $reseva)
                                    <tr>
                                        <td> {{ $reserva->id }} </td>
                                        <td> {{ $reserva->condominio }} </td>
                                        <td> {{ $reserva->departamento }} </td>
                                        <td> {{ $reserva->fecha }} </td>
                                        <td>
                                            <form action="{{ route('reserva.destroy', $reserva->id) }}" method="post">
                                                <a href="{{ route('reserva.edit', $reserva->id) }}" class="btn btn-warning">Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection