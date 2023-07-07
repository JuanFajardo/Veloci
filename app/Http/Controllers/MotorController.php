<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Motor;

class MotorController extends Controller
{
 
    public function index(){
        $datos = Motor::all();
        return view('motor.index', compact('datos'));
    }
     
    public function create(){
        return view('motor.create');
    }

    public function store(Request $request){
        $dato = new Motor;
        $dato->motor    = $request['motor'];
        $dato->save();
        return redirect('/Motor');
    }

    public function show($id){
        $dato = Motor::find($id);
        return view('motor.show', compact('dato'));
    }

    public function edit($id){
        $dato = Motor::find($id);
        return view('motor.edit', compact('dato'));
    }

    public function update(Request $request, $id){
        $dato = Motor::find($id);
        $dato->motor    = $request['Motor'];
        $dato->save();
        return redirect('/Trabajo');
    }    
}


