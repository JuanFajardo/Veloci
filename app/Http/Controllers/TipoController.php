<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Tipo;

class TipoController extends Controller
{
    public function index(){
        $datos = Tipo::all();
        return view('tipo.index', compact('datos'));
    }
     
    public function create(){
        return view('tipo.create');
    }

    public function store(Request $request){
        $dato = new Tipo;
        $dato->tipo         = $request['tipo'];
        $dato->save();
        return redirect('/Tipo');
    }

    public function show($id){
        $dato = Tipo::find($id);
        return view('tipo.show', compact('dato'));
    }

    public function edit($id){
        $dato = Tipo::find($id);
        return view('tipo.edit', compact('dato'));
    }

    public function update(Request $request, $id){
        $dato = Tipo::find($id);
        $dato->tipo         = $request['tipo'];
        $dato->save();
        return redirect('/Tipo');
    }
    
}


