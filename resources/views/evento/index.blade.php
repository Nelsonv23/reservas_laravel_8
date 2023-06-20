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
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo"></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="formulario" action="">
        <div class="modal-body">
          <div class="form-floating mb-3">

            <label for="title" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="title" id="title">

          </div>
          <div class="form-floating mb-3">

            <label for="departamento" class="form-label">Departamento</label>
            <input type="text" class="form-control" name="departamento" id="departamento">

          </div>
          <div class="form-floating mb-3">

            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono">

          </div>
          <div class="form-floating mb-3">

            <label for="start" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="start" id="start">

          </div>

        </div>
        <div class="modal-footer">

        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" id="btnCancelar">Cancelar</button>
        <button type="submit" class="btn btn-danger" id="btnEliminar">Eliminar</button>
        <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection