<div class="sidebar" data-color="orange" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
    <img src="{{ asset('material') }}/img/logo.png" alt="" width="130">
      <!-- {{ __('Innova Sur Pro') }} -->
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Panel Administración') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'reservas' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('reserva.index') }}">
          <i class="material-icons">content_paste_go</i>
            <p>{{ __('Gestión De Reservas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'evento' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('evento.index') }}">
          <i class="material-icons">insert_invitation</i>
          <p>{{ __('Calendario Reservas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'condominios' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('condominio.index') }}">
          <i class="material-icons">apartment</i>
            <p>{{ __('Gestión De Condominios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
          <i class="material-icons">manage_accounts</i>
            <p>{{ __('Gestión de usuarios') }}</p>
        </a>
      </li>
      <!-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false"> -->
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <!-- <i class="material-icons">manage_accounts</i>
          <p>{{ __('Gestión de usuarios') }}
            <b class="caret"></b> -->
          </p>
        </a>
        <!-- <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}"> -->
                <!-- <span class="sidebar-mini"> UP </span> -->
                <!-- <i class="material-icons">account_circle</i>
                <span class="sidebar-normal">{{ __('Modificar su perfil') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}"> -->
                <!-- <span class="sidebar-mini"> UM </span> -->
                <!-- <i class="material-icons">group</i>
                <span class="sidebar-normal"> {{ __('Modificar Usuarios') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> -->
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">insert_invitation</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'logout' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="material-icons text-white">logout</i>
          <p>{{ __('Cerrar Sesión') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
