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
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
                  Launch
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
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Formulario de reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="" action="">

          <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="">Departamento</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Ingrese N° de departamento">
            <small id="helpId" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="">Detalles</label>
            <textarea class="form-control" name="detalles" id="detalles" rows="3" placeholder="Ingrese detalles de la reserva"></textarea>
          </div>

          <div class="form-group">
            <label for="start">start</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Fecha de inicio">
            <small id="helpId" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="end">end</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Fecha de termini">
            <small id="helpId" class="form-text text-muted"></small>
          </div>

        </form>
      </div>
      <div class="modal-footer m-auto">
        <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
        <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endsection