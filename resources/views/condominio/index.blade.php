@extends('layouts.app', ['activePage' => 'condominios', 'titlePage' => __('Gestión De Condominios')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 text-left">
                        <a href="{{ route('condominios.create') }}" class="btn btn-info">
                            <i class="material-icons">add_circle</i> Nuevo Condominio</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Condominios Temuco</h4>
                        <p class="card-category"> Listado De Condominios Temuco</p>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success" role="success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Ciudad</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($condominios as $condominio)
                                    <tr>
                                        <td> {{ $condominio->id }} </td>
                                        <td> {{ $condominio->nombre }} </td>
                                        <td> {{ $condominio->direccion }} </td>
                                        <td> {{ $condominio->ciudad }} </td>
                                        <td>
                                            <form action="{{ route('condominios.destroy', $condominio->id) }}" method="post">
                                                <a href="{{ route('condominios.edit', $condominio->id) }}" class="btn btn-warning">Editar</a>
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