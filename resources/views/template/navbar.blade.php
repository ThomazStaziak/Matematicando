<nav class="purple lighten-1
">
    <div class="nav-wrapper">
      <a href="{{ url('/') }}" class="brand-logo center fonte-logo">Matematicando</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        @guest
          <li><a href="{{ url('login') }}">Jogar</a></li>
        @else
          <li><a href="{{ url('easy') }}">Jogar</a></li>
        @endguest
        <li><a href="{{ url('leaderboards') }}">Leaderboards</a></li>
        <li><a href="{{ url('faq') }}">FAQ</a></li>
      </ul>
    </div>
  </nav>
