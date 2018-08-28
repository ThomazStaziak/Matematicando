@extends('template.template')
@section('contents')
  <div class="container">
    <div class="row">
      <div class="col s6 offset-s3">
        <ul class="collection">
            <li class="collection-item center-align">Olá {{ Auth::user()->name }}, bem vindo!</li>
            <li class="collection-item"><span class="badge"><b>Pontuação:</b> {{ "1000" }}</span>#1</li>
            <li class="collection-item"><span class="badge"><b>Pontuação:</b> {{ "1000" }}</span>#2</li>
            <li class="collection-item"><span class="badge"><b>Pontuação:</b> {{ "1000" }}</span>#3</li>
            <li class="collection-item"><span class="badge"><b>Pontuação:</b> {{ "1000" }}</span>#4</li>
        </ul>
      </div>
    </div>
  </div>
@endsection
