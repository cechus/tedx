<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaker;

class SpeakerController extends Controller
{
    // Retorna lista de expositores para visitantes
    public function index () {
      $speakers = Speaker::all();
      return view('speakers.index', compact('speakers'));
    }

    // Retorna lista de expositores para admins
    public function list_speaker(){
      $speakers = Speaker::all();
      return view('administrador.list_speaker', compact('speakers'));
    }

    public function create() {
      return view('speakers.create');
    }

    public function store(Request $request){
      $speaker = new Speaker;
      $this->validate(request(), [
        'nombre' => 'required',
        'charla' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required',
      ]);

      $speaker->nombre = request('nombre');
      $speaker->charla = request('charla');
      $speaker->descripcion = request('descripcion');
      if (!empty($request->file('imagen'))) {
          $ext = $request->file('imagen')->getClientOriginalExtension();
          $nombre_uui = uniqid('', true);
          if ($request->file('imagen')->move(public_path('images/speakers'), "$nombre_uui.$ext")) {
              if (!empty($speaker->imagen)) {
                  $directo = public_path()  . '/images/speakers/' . $speaker->imagen;
                  if (file_exists($directo)) {
                      unlink($directo);
                  }
              }
              $speaker->imagen = "/images/speakers/$nombre_uui.$ext";
          }
      }
      $speaker->save();
      return redirect('list_speakers');
      //redirect('administrador.list_speaker');
    }

    public function edit($idSpeaker)
    {
        $speaker=Speaker::find($idSpeaker);
        return view('speakers.edit', compact('speaker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSpeaker)
    {
          $speaker=Speaker::find($idSpeaker);
          $speaker->nombre= request('nombre');
          $speaker->charla= request('charla');

          if (!empty($request->file('imagen'))) {
              $ext = $request->file('imagen')->getClientOriginalExtension();
              $nombre_uui = uniqid('', true);
              if ($request->file('imagen')->move(public_path('images/speakers'), "$nombre_uui.$ext")) {
                  if (!empty($speaker->imagen)) {
                      $directo = public_path()  . '/images/speakers/' . $speaker->imagen;
                      if (file_exists($directo)) {
                          unlink($directo);
                      }
                  }
                  $speaker->imagen = "/images/speakers/$nombre_uui.$ext";
              }
          }
          $speaker->descripcion = request('descripcion');
          $speaker->save();
          return redirect('list_speakers');
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
