<nav>
    <div class="nav-wrapper">
      <a href="{{ url('/') }}" class="brand-logo center">Matematicando</a>
      <ul class="left hide-on-med-and-down">
        @guest
          <li><a href="{{ route('login') }}">Login</a></li>
        @else
          <li><a href="{{ route('home') }}">Thomaz</a></li>
        @endguest
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        @guest
          <li><a href="{{ url('login') }}">Jogar</a></li>
        @else
          <li><a href="{{ url('easy') }}">Jogar</a></li>
        @endguest
        <li><a href="{{ url('comoJogar') }}">Como Jogar?</a></li>
        <li><a href="{{ url('leaderboards') }}">Tabela De Líderes</a></li>
      </ul>
    </div>
  </nav>
