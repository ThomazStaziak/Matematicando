<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoresController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function gerarCalculo($operador, $inicio, $fim){
      $numero1 = rand($inicio, $fim);
      $numero2 = rand($inicio, $fim);
      switch ($operador) {
        case 'x':
          $conta = $numero1 * $numero2;
        break;
        case ':':
           while($numero1 % $numero2 != 0) {
            $numero1 = rand($inicio, $fim);
            $numero2 = rand($inicio, $fim);
           }
           $conta = $numero1 / $numero2;
           break;
        case '+':
           $conta = $numero1 + $numero2;
            break;
        case '-':
           $conta = $numero1 - $numero2;
          break;
      }
      return [$numero1, $numero2, $conta];
    }
    public function easy()
    {
      $array = [];
      $operadoresV = ['+','-','x',':'];
      for ($i=1; $i <= 10 ; $i++) {
        $num = rand(0,3);
        $operador = $operadoresV[$num];
          $aux = $this->gerarCalculo($operador, 1, 10);
          $array[] = [
            'questao' => $aux[0]."$operador" . $aux[1],
            'resposta' => $aux[2]
          ];
      }
      return view('game', ['array' => $array]);

    }
}
