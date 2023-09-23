<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Visita;
use Illuminate\Support\Facades\DB;


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
    public function graf($inicio, $fin, $tipo){
        $gf = null;

        if($tipo == "mes"){
            $gf = Visita::select(Visita::raw('COUNT(*) as total'), Visita::raw('MONTH(updated_at) as mes'))
               ->groupBy(Visita::raw('MONTH(updated_at)'))
               ->whereBetween('updated_at', [$inicio, $fin])
               ->orderBy('mes', 'asc')
               ->get();
        }elseif($tipo == "dia"){
            $gf = Visita::select(Visita::raw('COUNT(*) as total'), Visita::raw('DAY(updated_at) as mes'))
               ->groupBy(Visita::raw('DAY(updated_at)'))
               ->whereBetween('updated_at', [$inicio, $fin])
               ->orderBy('mes', 'asc')
               ->get();
        }elseif($tipo == "semana"){
            $gf = \DB::table('visitas')
               ->select(DB::raw('YEAR(updated_at) as anio, WEEK(updated_at) as mes, COUNT(*) as total'))
               ->whereBetween('updated_at', [$inicio, $fin])
               ->groupBy(DB::raw('YEAR(updated_at), WEEK(updated_at)'))
               ->orderBy('anio')
               ->orderBy('mes')
               ->get();
        }
        return $gf;
    }    
}
