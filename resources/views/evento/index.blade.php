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
              <div class="container-fluid" id="agenda">
              <p class="card-category"> Muestra las reservas realizadas desde el sistema</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection