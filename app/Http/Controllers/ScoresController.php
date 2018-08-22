<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoresController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function easy()
    {
      $array = [];
      for ($i=1; $i <= 5 ; $i++) {
        if ($i <= 3) {
          $numero1 = rand(0, 20);
          $numero2 = rand(0, 20);
          $array[] = [
            'questao' => $numero1 . ' + ' . $numero2,
            'resposta' => $numero1 + $numero1
          ];
        } else {
          $numero1 = rand(0, 20);
          $numero2 = rand(0, 20);
          $array[] = [
            'questao' => $numero1 . ' - ' . $numero2,
            'resposta' => $numero1 - $numero1
          ];
        }
      }
      $array[] = ['questao' => 'Acabou!'];

      return view('game', ['array' => $array]);

    }
}
