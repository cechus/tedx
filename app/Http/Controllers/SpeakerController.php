<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaker;

class SpeakerController extends Controller
{
    //
    public function index () {
      $speakers = Speaker::all();
      return view('speakers.index', compact('speakers'));
    }

    public function list_speaker(){
      $speakers = Speaker::all();
      return view('administrador.list_speaker', compact('speakers'));
    }

    public function create() {
      return view('speakers.create');
    }

    public function store(){
      $this->validate(request(), [
        'nombre' => 'required',
        'charla' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required'
      ]);

      $speaker = new Speaker;
      $speaker->nombre = request('nombre');
      $speaker->charla = request('charla');
      $speaker->descripcion = request('descripcion');
      $speaker->imagen = request('imagen')->move('img_speakers');
      $speaker->save();

      return redirect('/');
    }

}
