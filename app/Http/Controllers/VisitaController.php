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
    public function graf($inicio, $fin){
        $gf = Visita::select(Visita::raw('COUNT(*) as total'), Visita::raw('MONTH(updated_at) as mes'))
               ->groupBy(Visita::raw('MONTH(updated_at)'))
               ->whereBetween('updated_at', [$inicio, $fin])
               ->orderBy('mes', 'asc')
               ->get();
        return $gf;

        //return view('visita.index', compact('gf'));
        
    }    
}
