<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003E84">
  <a href="https://www.emtel.net.co/" target="_blank">
    <img src="{{ asset('images/emtellogo.png') }}">
  </a>
  <a class="navbar-brand"></a>
    <a class="navbar-brand" href="#">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @if(Auth::user()->name)
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Nodos</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CMTS</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Características de monitoreo</a>
            <a class="dropdown-item" href="#">Estados de sobrecarga</a>
          </div>
        </li>
      </li>
      <li class="nav-item">
          {{-- @if(Auth::user()->admin()) --}}
            <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
          {{-- @endif --}}
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Textos</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Teóricos</a>
          <a class="dropdown-item" href="#">Manuales</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Soporte</a>
      </li>
    </ul>
    <ul class="navbar-nav mr">
      <form class="form-inline my-2 my-lg-0">
        <li class="nav-item dropdown">  
          <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Arquitectura</button>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ver</a>
            <a class="dropdown-item" href="#">Subir</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://www.lucidchart.com/" target="_blank">Modificar en Lucidchart</a>
          </div>
        </li>
        <div class="btn-group">
          <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name}}
          </button>   
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}
            </a>
        </div>
      </form>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
    @csrf
    </form>
    </div>
  @endif
</nav>