<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">

    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name') }}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products-index') }}">products </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">about </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">contact </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesion
                        </a>
                    </li>
                @endguest
            </ul>
        </div>

    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
