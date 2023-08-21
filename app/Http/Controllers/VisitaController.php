<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Visita;

class VisitaController extends Controller
{
    public function index(){
        $datos = Visita::select('titulo', Visita::raw('count(titulo) as cantidad'))
               ->groupBy('titulo')
               ->orderBy('cantidad', 'desc')
               ->get();

        return view('visita.index', compact('datos'));
        return $datos;
    }

    public function detalle($id){
        $id = base64_decode($id);
        $datos = Visita::Where('titulo', $id) ->get();
        return view('visita.detalle', compact('datos', 'id'));
        return $datos; 
    }
    public function graf(){
        $gf = Visita::select('updated_at', Visita::raw('count(updated_at) as cantidad'))
               ->groupBy('updated_at')
               ->orderBy('cantidad', 'desc')
               ->get();
               return $gf;

        return view('visita.index', compact('gf'));
        //return $gf;
    }
    
    // Route::get('/Visita' , 'App\Http\Controllers\VisitaController@index');
    // Route::get('/Visita/{id}' , 'App\Http\Controllers\VisitaController@detalle');
}
