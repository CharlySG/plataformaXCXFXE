<li>
    <a id="dropnavbar" class="dropdown-trigger" href="#!" data-target="dropdownMenu">{{Auth::user()->name}}
        <i class="material-icons right">arrow_drop_down</i>
    </a>
</li>

{{-- Dropdown para medicos --}}
<ul id="dropdownMenu" class="dropdown-content">
  <li>
    <a href="#!">
      <i class="material-icons">account_circle</i>Mi perfil
    </a>
  </li>
  <li>
    <a class="modal-trigger" id="fileUpload" href="#modal1">
      <i class="material-icons">file_upload</i>Subir Archivo
    </a>
  </li>
  <li>
    <a href="#!">
      <i class="material-icons">message</i>Mensajes
      <span class="new badge">1</span>
    </a>
  </li>
  <li class="divider"></li>
  <li>
    <a href="#!">
      <i class="material-icons">info_outline</i>Acerca de</a>
  </li>
  <li>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      <i class="material-icons">exit_to_app</i>Salir</a>
  </li>
</ul>
