<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ route('settings') }}"><i class="material-icons left">person</i>Profile</a></li>
    <li><a href="{{ route('dashboard') }}"><i class="material-icons left">dashboard</i>Dashboard</a></li>
    <li>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <i class="material-icons left">power_settings_new</i>
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
<nav>
  <div class="nav-wrapper">
    <div class="container">
        <a class="brand-logo" href="{{ url('/') }}">
            {{ config('app.name', 'CSCQC') }}
        </a>
    </div>
    <ul class="right hide-on-med-and-down">
    @guest
        <li>
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @else
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ my()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
    @endguest
    </ul>
  </div>
</nav>