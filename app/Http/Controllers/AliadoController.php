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


    public function aliado(Request $request){
        if(!empty($request->all())){
            dd($request->file('archivo'));
            dd($request->all());
        }
        return view('administrador.aliado');
    }
    
}
