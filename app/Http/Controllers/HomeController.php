<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Marca;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
        $datos = Vehiculo::where('popular', '1')->get();
        $marcas = Marca::all();
        return view('home', compact('datos', 'marcas'));
    }

    public function show($busqueda){
        $datos = Vehiculo::Where('marca', $busqueda)->paginate(12);
        $sucess ="";
        return view('vehiculo.tienda', compact('datos','sucess', 'busqueda'));        
    }
}
