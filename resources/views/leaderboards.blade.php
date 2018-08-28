@extends('template.template')

@section('contents')
  <div class="container">
    <div class="row">
      <div class="col s12 center-align">
        <h4>Melhores Jogadores</h4>
      </div>
      <div class="col s8 offset-s2">
        <ul class="collection">
          <li class="collection-item avatar">
            <img src="images/yuna.jpg" alt="" class="circle">
            <span class="title"><b>Nome:</b> Thomaz</span>
            <p><b>Pontuação:</b> 1000</p>
            <a href="#!" class="secondary-content"><b>#1</b></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle">folder</i>
            <span class="title"><b>Nome:</b> Carol</span>
            <p><b>Pontuação:</b> 800</p>
            <a href="#!" class="secondary-content"><b>#2</b></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle green">insert_chart</i>
            <span class="title"><b>Nome:</b> José</span>
            <p><b>Pontuação:</b> 600</p>
            <a href="#!" class="secondary-content"><b>#3</b></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle red">play_arrow</i>
            <span class="title"><b>Nome:</b> Carol</span>
            <p><b>Pontuação:</b> 400</p>
            <a href="#!" class="secondary-content"><b>#4</b></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection
