<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoresController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function gerarCalcular($operador){
      $numero1 = rand(1, 10);
      $numero2 = rand(1, 10);
      switch ($operador) {
        case 'x':
           $conta = $numero1 * $numero2;   
          break;
        case ':':
           $aux = $numero1;
           $numero1 = $numero1*$numero2;
           break;
        case '+':
           $conta = $numero1 * $numero2;
            break;
        case '-':
           $conta = $numero1 * $numero2;
          break;    
      }
      return [$numero1, $numero2, $conta];
    }
    public function easy()
    {
      $array = [];
      $operadoresV = ['+','-','x',':'];
      for ($i=1; $i <= 5 ; $i++) {
        $num = rand(0,3);
        $operador = $operadoresV[$num];
        if ($i <= 3) {
          $aux = $this->gerarCalcular($operador);
          $array[] = [
            'questao' => $aux[0]."$operador" . $aux[1],
            'resposta' => $aux[2]
          ];
        } else {
          $numero1 = rand(0, 20);
          $numero2 = rand(0, 20);
          $array[] = [
            'questao' => $numero1 . ' - ' . $numero2,
            'resposta' => $numero1 - $numero2
          ];
        }
      }
      $array[] = ['questao' => 'Acabou!'];
      return view('game', ['array' => $array]);

    }
}
