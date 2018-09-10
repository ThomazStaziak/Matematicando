<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function modal($nivel)
    {
      if ($nivel === 'looser') {
        $foto = 'img/calculadoraTriste.png';
        $audio = 'audio/error-song.mp3';
      } else {
        $foto = 'img/calculadoraFeliz.png';
        $audio = 'audio/sucess-song.mp3';
      }
      return view('modal')->with('foto', $foto)->with('audio', $audio);
    }
}
