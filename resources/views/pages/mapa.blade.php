@extends('layouts.app', ['activePage' => 'mapa', 'titlePage' => __('Mapa')])

@section('content')
<!-- <div id="map"></div> -->
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
              <iframe width="800" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
              src="https://www.openstreetmap.org/export/embed.html?bbox=-72.75867462158205%2C-38.80118939192327%2C-72.47200012207033%2C-38.68309777519594&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=13/-38.7422/-72.6153">Ver mapa más grande</a></small>
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

<!-- @push('js')
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initGoogleMaps();
  });
</script>
@endpush -->