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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#evento">
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
<div class="modal fade mt-5 mt-5" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Formulario de reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="POST">
        @csrf
        @method('STORE')
        <div class="form-group">
            <label for="id">ID</label>
            <input type="id" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="title">N° Departamento</label>
            <input type="text" class="form-control" name="departamento" id="departamento" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="detalles">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
          </div>

          <div class="form-group">
            <label for="start">Fecha de inicio</label>
            <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="end">Fecha de termino</label>
            <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted"></small>
          </div>

        </form>
      </div>
      <div class="modal-footer m-auto">
        <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
        <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>
@endsection