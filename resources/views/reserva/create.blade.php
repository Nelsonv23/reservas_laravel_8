@extends('layouts.app', ['activePage' => 'reservas', 'titlePage' => __('Crear Reserva')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('reserva.store') }}" autocomplete="off" class="form-horizontal">
          @csrf

          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Crear nueva reserva') }}</h4>
              <p class="card-category">{{ __('Complete el formulario para crear una nueva reserva') }}</p>
            </div>
            <div class="card-body ">
              @if (session('status'))
              <div class="row">
                <div class="col-sm-12">
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('status') }}</span>
                  </div>
                </div>
              </div>
              @endif
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Departamento') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('departamento') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" id="input-departamento" type="text" placeholder="{{ __('Departamento') }}" value="{{ old('departamento') }}" required="true" aria-required="true" />
                    @if ($errors->has('departamento'))
                    <span id="departamento-error" class="error text-danger" for="input-departamento">{{ $errors->first('departamento') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <!-- Select Condominio -->
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Condominio') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('condominio') ? ' has-danger' : '' }}">
                    <select class="form-control{{ $errors->has('condominio') ? ' is-invalid' : '' }}" name="condominio" id="select-condominio" type="text" value="{{ old('condominio') }}" required >
                    <option disabled selected>Seleccione</option>
                        @foreach ($condominios as $condominio)
                        <option value="{{ $condominio->nombre }}">{{ $condominio->nombre }}</option>
                        @endforeach
                    </select >
                    @if ($errors->has('condominio'))
                    <span id="condominio-error" class="error text-danger" for="input-condominio">{{ $errors->first('condominio') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <!-- Fin Select Condominio -->
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Fecha') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('fecha') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('fecha') ? ' is-invalid' : '' }}" name="fecha" id="input-fecha" type="date" placeholder="{{ __('Fecha') }}" value="{{ old('fecha') }}" required />
                    @if ($errors->has('fecha'))
                    <span id="fecha-error" class="error text-danger" for="input-fecha">{{ $errors->first('fecha') }}</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection