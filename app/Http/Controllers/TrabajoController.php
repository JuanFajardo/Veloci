<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Trabajo;
use \App\Mail\VelociMail;
use Illuminate\Support\Facades\Mail;

class TrabajoController extends Controller
{


    public function index(){
        $datos = Trabajo::all();
        return view('trabajo.index', compact('datos'));
    }
     
    public function create(){
        return view('trabajo.create');
    }

    public function store(Request $request){

        $pdf = $request->file('pdf')->store('public/images');
        
        $dato = new Trabajo;
        $dato->id_usuario   = \Auth::user()->id;
        $dato->titulo       = $request['titulo'];
        $dato->tipo         = $request['tipo'];
        $dato->contenido    = $request['contenido'];
        $dato->pdf          = $pdf;
        $dato->activo       = True;
        $dato->save();

        return redirect('/Trabajo');
    }

    public function show($id){
        $dato = Trabajo::find($id);
        return view('trabajo.show', compact('dato'));
    }

    public function edit($id){
        $dato = Trabajo::find($id);
        return view('trabajo.edit', compact('dato'));
    }

    public function update(Request $request, $id){
        $dato = Trabajo::find($id);
        $dato->id_usuario   = \Auth::user()->id;
        $dato->titulo       = $request['titulo'];
        $dato->tipo         = $request['tipo'];
        $dato->contenido    = $request['contenido'];
        
        if ($request->hasFile('pdf')){
            $pdf = $request->file('pdf')->store('public/images');
            $dato->pdf = $pdf;  
        }

        $dato->activo       = True;
        $dato->save();
       
        return redirect('/Trabajo');
    }

    public function clasificados(){
        $datos = Trabajo::all();
        return view('trabajo.clasificado', compact('datos'));        
    }
    
}


