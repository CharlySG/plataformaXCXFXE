<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
      <a href="#!" class="brand-logo hide-on-med-and-down">logo</a>
      <a href="#!" class="brand-logo hide-on-large-only">logo</a>
      <ul class="right hide-on-med-and-down">
        @guest
        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
          @include('layouts.includes.header_includes.dropdown')
        @endguest
      </ul>
    </div>
  </nav>
</div>