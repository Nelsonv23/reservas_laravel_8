@extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('Usuarios del sistema')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 text-left">
                        <a href="{{ route('users.create') }}" class="btn btn-info">Crear Nuevo Usuario</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Usuarios</h4>
                        <p class="card-category"> Listado De Usuarios Temuco</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Fecha Ingreso</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td> {{ $user->id }} </td>
                                        <td> {{ $user->name }} </td>
                                        <td> {{ $user->email }} </td>
                                        <td> {{ $user->created_at }} </td>
                                        <td>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Editar</a>
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