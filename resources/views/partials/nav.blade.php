<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    @guest
        <a class="navbar-brand" href="{{ route('welcome') }}">{{ getenv('APP_NAME') }}</a>
    @else
        <a class="navbar-brand" href="{{ route('home') }}">{{ getenv('APP_NAME') }}</a>
    @endguest
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                @guest
                    <a class="nav-link {{ setActive('welcome') }}" href=" {{ route('welcome') }} ">Home</a>
                @else
                    <a class="nav-link {{ setActive('home') }}" href=" {{ route('home') }} ">Home</a>
                @endguest
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">About</a>
            </li>
            @if (auth()->check())
                <li class="nav-item">
                    <a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">Projects</a>
                </li>
                @if (auth()->user()->hasRoles(['admin']))
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('users.*') }}" href="{{ route('users.index') }}">Users</a>
                    </li>
                @endif
            @endif
            <li class="nav-item">
                <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('users.edit', auth()->id()) }}">
                            Mi cuenta
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
  </nav>
