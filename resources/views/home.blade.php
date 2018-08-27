@extends('template.template')
@section('contents')
  <div class="container">
    <div class="row">
      <div class="col s6 offset-s3">
        <div class="collection">
            <a href="#!" class="collection-item center-align">Olá {{ Auth::user()->name }}, bem vindo!</a>
            <a href="#!" class="collection-item"><span class="badge"><b>Pontuação:</b> {{ "1000" }}</span>#1</a>
            <a href="#!" class="collection-item"><span class="badge"><b>Pontuação:</b> {{ "1000" }}</span>#2</a>
            <a href="#!" class="collection-item"><span class="badge"><b>Pontuação:</b> {{ "1000" }}</span>#3</a>
            <a href="#!" class="collection-item"><span class="badge"><b>Pontuação:</b> {{ "1000" }}</span>#4</a>
        </div>
      </div>
    </div>
  </div>
@endsection
