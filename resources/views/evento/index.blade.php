@extends('layouts.app', ['activePage' => 'evento', 'titlePage' => __('Evento')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Calendario De Reservas</h4>
            <p class="card-category"> Muestra las reservas realizadas desde el sistema</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="container-fluid">
                <div id="calendar" class="col-12 justify-content-center pb-5"></div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Guardar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="titulo">Realizar Reserva</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="form-floating" action="{{ route('evento.store') }}" id="formulario" method="POST">
          @csrf

          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" class="form-control" name="nombre" id="nombre">

          <label for="departamento" class="form-label">Departamento:</label>
          <input type="text" class="form-control" name="departamento" id="departamento">

          <label for="telefono" class="form-label">Teléfono:</label>
          <input type="text" class="form-control" name="telefono" id="telefono">

          <label for="fecha" class="form-label">Fecha:</label>
          <input type="date" class="form-control" name="start" id="start">

          <div class="modal-footer mt-5">
            <button type="button" id="btnCancelar" class="btn btn-close" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

@endsection