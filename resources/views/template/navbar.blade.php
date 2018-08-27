<nav class="purple lighten-1
">
    <div class="nav-wrapper">

      <a href="{{ url('/') }}" class="brand-logo center fonte-logo">Matematicando</a>
      <ul class="left hide-on-med-and-down">
        @guest
          <li><a href="{{ route('login') }}">Login</a></li>
        @else
          <li><a class="botao btn dropdown-button" href="#" data-activates="dropdown"><span class="teste">Meu Perfil</span><span class="arrow material-icons">arrow_drop_down</span> </a></li>
            <ul id="dropdown" class="dropdown-content">
              <li>
                <a href="{{ url('home') }}">{{ Auth::user()->name }}</a>
              </li>
              <li>
                <a href="#" onClick="document.getElementById('form1').submit()">Logout</a>
                <form id="form1" action="{{ route('logout') }}" method="POST">
                  @csrf
                </form>
            </li>
          </ul>
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
