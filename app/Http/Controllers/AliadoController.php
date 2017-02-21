<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aliado;
use Illuminate\Http\UploadedFile;

class AliadoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //   $this->middleware('auth');
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


    public function aliado(Request $request, $idAliado = null)
    {
        if (!empty($request->all())) {
            if (!empty($request->id)) {
                $aliado = Aliado::find($request->id);
            } else {
                $aliado = new Aliado();
            }
            if (!empty($request->file('archivo'))) {
                $ext = $request->file('archivo')->getClientOriginalExtension();
                $nombre_uui = uniqid('', true);
                if ($request->file('archivo')->move('img_aliados', "$nombre_uui.$ext")) {
                    if (!empty($aliado->imagen)) {
                        $directo = public_path()  . '/img_aliados/' . $aliado->imagen;
                        if (file_exists($directo)) {
                            unlink($directo);
                        }
                    }
                    $aliado->imagen = "$nombre_uui.$ext";
                }
            }

            $aliado->nombre = $request->nombre;
            $aliado->descripcion = $request->descripcion;
            $aliado->categoria = $request->categoria;
            $aliado->save();

            //Flash::success('Se ha guardado correctamente los el logo!!');
//            return redirect()->back();
            return redirect('lista_aliados');
        } else {
            $aliado = Aliado::find($idAliado);
        }
        return view('administrador.aliado')->with(compact('aliado'));
    }

    public function lista_aliados()
    {
        $lista_aliados = Aliado::get();
        return view('administrador.lista_aliados')->with(compact('lista_aliados'));
    }

    public function aliados(){
        //$aliados = Aliado::get();
        $ag = Aliado::where('categoria', 'Gold')->get();
        $ap = Aliado::where('categoria', 'Platinum')->get();
        $am = Aliado::where('categoria', 'Amigos')->get();
        //return view('aliados')->with(compact('aliados'));
        return view('aliados',[
            'aliadosGold' => $ag,
            'aliadosPlatimun' => $ap,
            'aliadosAmigos' => $am
        ]);
    }

    public function eliminar($idAliado){
        $aliado = Aliado::find($idAliado);
        if (!empty($aliado->imagen)) {
            $directo = public_path()  . '/img_aliados/' . $aliado->imagen;
            if (file_exists($directo)) {
                unlink($directo);
            }
        }
        $aliado->delete();
        return redirect()->back();
    }

}
