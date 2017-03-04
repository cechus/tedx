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

    public function store(Request $request){
      $this->validate(request(), [
        'nombre' => 'required',
        'charla' => 'required',
        'descripcion' => 'required',

      ]);

      $speaker = new Speaker;
      $speaker->nombre = request('nombre');
      $speaker->charla = request('charla');
      $speaker->descripcion = request('descripcion');
      if (!empty($request->file('imagen'))) {
          $ext = $request->file('imagen')->getClientOriginalExtension();
          $nombre_uui = uniqid('', true);
          if ($request->file('imagen')->move('img_speakers', "$nombre_uui.$ext")) {
              if (!empty($speaker->imagen)) {
                  $directo = public_path()  . '/img_speakers/' . $speaker->imagen;
                  if (file_exists($directo)) {
                      unlink($directo);
                  }
              }
              $speaker->imagen = "$nombre_uui.$ext";
          }
      }
      $speaker->save();
      return redirect('list_speakers');
      //redirect('administrador.list_speaker');
    }

    public function eliminar($idSpeaker){
        $speaker = Speaker::find($idSpeaker);
        if (!empty($speaker->imagen)) {
            $directo = public_path()  . '/img_speakers/' . $speaker->imagen;
            if (file_exists($directo)) {
                unlink($directo);
            }
        }
        $speaker->delete();
        return redirect()->back();
    }

}
