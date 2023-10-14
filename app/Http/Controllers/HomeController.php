<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Marca;

use \App\Models\Combustible;

use \App\Models\Motor;
use \App\Models\Tipo;
use \App\Models\Visita;


class HomeController extends Controller
{
    
    public function index(Request $request)
    {
        try {
            Visita::insertarVisita($request->ip(), '/index.php/home', 'home', $request->userAgent());
        } catch (\Exception $e) {
            Visita::insertarVisita($e, '/index.php/home', 'home', $e);
        }

        #Visita::insertarVisita($request->ip(), '/index.php/home', 'home', $request->userAgent());
        
        $datos = Vehiculo::where('popular', '1')->get();
        $marcas = Marca::all();
        
        $visitasN = Visita::Where('titulo', 'home')->count();
        $vehiculosN = Vehiculo::count();
        $marcasN = Marca::count();
        
        return view('home', compact('datos', 'marcas', 'visitasN', 'vehiculosN', 'marcasN'));
    }

    public function show(Request $request,  $busqueda){

        try {
            Visita::insertarVisita($request->ip(), '/index.php/Tienda/Buscar', 'Busqueda : '.$busqueda, $request->userAgent());
        } catch (\Exception $e) {
            Visita::insertarVisita($e, '/index.php/Tienda/Buscar', 'Busqueda : '.$busqueda, $e);
        }
        

        $datos = Vehiculo::Where('marca', $busqueda)->paginate(12);
        $sucess ="";
        $combustibles = Combustible::all();
        $marcas = Marca::all();
        $motors = Motor::all();
        $tipos =Tipo::all();
        //return "bett0";
        return view('vehiculo.tienda', compact('datos','sucess', 'busqueda','combustibles','marcas','motors','tipos'));                                        
    }
}
