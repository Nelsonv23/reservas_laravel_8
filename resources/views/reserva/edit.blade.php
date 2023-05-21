@extends('layouts.app', ['activePage' => 'reservas', 'titlePage' => __('Editar Reserva')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="{{ route('reserva.update', $reserva->id) }}" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editar reserva') }}</h4>
                <p class="card-category">{{ __('Complete el formulario para editar una nueva reserva') }}</p>
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
                      <input class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" id="input-departamento" type="text" value="{{ $reserva->departamento }}" required="true" aria-required="true"/>
                      @if ($errors->has('departamento'))
                        <span id="departamento-error" class="error text-danger" for="input-departamento">{{ $errors->first('departamento') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Condominio') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('condominio') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('condominio') ? ' is-invalid' : '' }}" name="condominio" id="input-condominio" type="text" value="{{ $reserva->condominio }}" required />
                      @if ($errors->has('condominio'))
                        <span id="condominio-error" class="error text-danger" for="input-condominio">{{ $errors->first('condominio') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Fecha') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('fecha') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('fecha') ? ' is-invalid' : '' }}" name="fecha" id="input-fecha" type="date" value="{{ $reserva->fecha }}" required />
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