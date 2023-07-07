<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Marca;

class MarcaController extends Controller
{
    public function index(){
        $datos = Marca::all();
        return view('marca.index', compact('datos'));
    }
     
    public function create(){
        return view('marca.create');
    }

    public function store(Request $request){
        $dato = new Marca;
        $dato->marca  = $request['marca'];
        $dato->save();
        return redirect('/Marca');
    }

    public function show($id){
        $dato = Marca::find($id);
        return view('marca.show', compact('dato'));
    }

    public function edit($id){
        $dato = Marca::find($id);
        return view('marca.edit', compact('dato'));
    }

    public function update(Request $request, $id){
        $dato = Trabajo::find($id);
        $dato->marca  = $request['marca'];
        $dato->save();
        return redirect('/Marca');
    }
    
}


