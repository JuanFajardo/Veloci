<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Combustible;
class CombustibleController extends Controller
{
    public function index(){
        $datos = Combustible::all();
        return view('combustible.index', compact('datos'));
    }
     
    public function create(){
        return view('combustible.create');
    }

    public function store(Request $request){
        $dato = new Trabajo;
        $dato->combustible    = $request['combustible'];
        $dato->save();
        return redirect('/Combustible');
    }

    public function show($id){
        $dato = Combustible::find($id);
        return view('combustible.show', compact('dato'));
    }

    public function edit($id){
        $dato = Combustible::find($id);
        return view('combustible.edit', compact('dato'));
    }

    public function update(Request $request, $id){
        $dato = Trabajo::find($id);
        $dato->combustible    = $request['combustible'];
        $dato->save();
        return redirect('/Combustible');
    }
    
}


