<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Trabajo;
use \App\Mail\VelociMail;
use Illuminate\Support\Facades\Mail;
use \App\Models\Visita;

class TrabajoController extends Controller
{

    public function index( Request $request ){
        Visita::insertarVisita( $request->ip(), '/index.php/Trabajo', 'Trabajo', $request->userAgent() );
        $datos = Trabajo::all();
        return view('trabajo.index', compact('datos'));
    }
     
    public function create( Request $request ){
        Visita::insertarVisita( $request->ip(), '/index.php/Trabajo/create', 'Trabajo/create', $request->userAgent() );
        return view('trabajo.create');
    }

    public function store(Request $request){

        Visita::insertarVisita( $request->ip(), '/index.php/Trabajo/create', 'Trabajo/Guardar', $request->userAgent() );
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

    public function show(Request $request, $id){
        Visita::insertarVisita( $request->ip(), '/index.php/Trabajo/'.$id, 'Trabajo/Mostrar', $request->userAgent() );
        $dato = Trabajo::find($id);
        return view('trabajo.show', compact('dato'));
    }

    public function edit(Request $request, $id){
        Visita::insertarVisita( $request->ip(), '/index.php/Trabajo/'.$id.'/edit', 'Trabajo/Editar', $request->userAgent() );
        $dato = Trabajo::find($id);
        return view('trabajo.edit', compact('dato'));
    }

    public function update(Request $request, $id){
        Visita::insertarVisita( $request->ip(), '/index.php/Trabajo/'.$id.'/edit', 'Trabajo/Editar/Guardar', $request->userAgent() );
        
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

    public function clasificados(Request $request){
        Visita::insertarVisita( $request->ip(), '/index.php/Clasificados', 'Clasificados', $request->userAgent() );
        
        $datos = Trabajo::all();
        return view('trabajo.clasificado', compact('datos'));        
    }

    public function destroy(Request $request, $id){
        Visita::insertarVisita( $request->ip(), '/index.php/Trabajo/'.$id.'/edit', 'Trabajo/Eliminar', $request->userAgent() );
        $dato = Trabajo::find($id);
        $dato->delete();
        return redirect('/Trabajo');
    }

    public function activar(Request $request, $id){
        $dato = Trabajo::find($id);
        Visita::insertarVisita( $request->ip(), '/index.php/Trabajo/'.$id.'/edit', 'Trabajo/Activo', $request->userAgent() );
        $dato->activo= !($dato->activo);
        $dato->save();
        return redirect('/Trabajo');
    }
    
}


