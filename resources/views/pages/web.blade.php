@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Icons')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Sitio Web</h4>
          <p class="card-category">Vista De Su Sitio Web corporativo
            <a target="_blank" href="https://innovaprosur.cl/">InnovaProSur</a>
          </p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="iframe-container d-none d-lg-block">
                <iframe src="https://innovaprosur.cl/">
                  <p>Your browser does not support iframes.</p>
                </iframe>
              </div>
              <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">
                <h5>Esta seccón solo es visibles en el modo Escritorio, no funciona en dispositivos móviles y tabletas. 
                  <a href="https://innovaprosur.cl/" target="_blank">InnovaProSur</a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection