@extends('template.template')

@section('contents')
    
        <div class="row">
            <div class="col l11 center-align">
            <h5>Pergunta</h5>
                 <h1>{{$array[1]['questao']}}</h1>
            </div>
            <div class="col l1 right-align">00:15</div>
        </div>
        <div class="row center-align">
            <div class="offset-l3 col l5 ">
                <input type="text" class="center-align" name="" id="">
            </div>
        </div>
@endsection