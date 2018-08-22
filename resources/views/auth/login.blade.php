{{-- @extends('layouts.app') --}}
@extends('template.template')

@section('contents')
<br>
  <div class="row">
    <div class="collapsible-header">
      <span class="col s6">Login</span>
      <span class="col s6">Registrar-se</span>
    </div>
    <div class="login col s6"><br>
      <form class="col s12" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">email</i>
            <input id="icon_prefix" type="email" name="email" value="{{ old('email') }}" class="validate">
            <label for="icon_prefix" class="active">Email</label>
            @if (count($errors) > 0)
              <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">lock</i>
            <input id="icon_lock" type="password" name="password" value="{{ old('password') }}" class="validate">
            <label for="icon_lock" class="active">Senha</label>
          </div>
          <div class="input-field col s12">
            <div class="switch col s4 right">
              <p>
                <label>
                  <input type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                  <span class="lever"></span>
                </label>
                <span class="grey-text">Remember Me?</span>
              </p>
            </div>
          </div>
          <div class="input-field col s12 right">
            <button class="btn waves-effect red darken-2" type="submit" name="action">Logar
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="register col s6">
      <form class="col s12" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        @csrf

        <div class="row"><br>
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">email</i>
            <input id="email" type="text" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">lock</i>
            <input id="senha" type="text" class="validate">
            <label for="senha">Senha</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">lock_open</i>
            <input id="senha_confirm" type="text" class="validate">
            <label for="senha_confirm">Confirmar Senha</label>
          </div>
          <div class="input-field col s12 right">
            <button class="btn waves-effect red darken-2" type="submit" name="action">Registrar
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
