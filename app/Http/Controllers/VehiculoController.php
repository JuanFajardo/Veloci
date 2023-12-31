<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Vehiculo;
use \App\Mail\VelociMail;

use \App\Models\Combustible;
use \App\Models\Marca;
use \App\Models\Motor;
use \App\Models\Tipo;
use \App\Models\Visita;

use Illuminate\Support\Facades\Mail;

class VehiculoController extends Controller
{
    public function index(Request $request){
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo', 'Vehiculo', $request->userAgent());
        
        $datos = Vehiculo::all();
        $populares = Vehiculo::Where('popular', '1')->count();
        $visitasA = Visita::count();
        $vehiculosA = Vehiculo::count();
        $marcasA = Marca::count();
        $tiposA = Tipo::count();
        return view('vehiculo.index', compact('datos', 'populares', 'visitasA', 'vehiculosA', 'marcasA','tiposA'));
    }

    public function create(Request $request){
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo/create', 'Vehiculo/Crear', $request->userAgent());
        
        $combustibles = Combustible::all();
        $marcas = Marca::all();
        $motors = Motor::all();
        $tipos =Tipo::all();
        return view('vehiculo.create', compact('combustibles','marcas','motors','tipos'));
    }

    public function store(Request $request){
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo/create', 'Vehiculo/Guardar', $request->userAgent());
        
        $foto1 = $request->file('foto1')->store('public/images');
        $foto2 = $request->file('foto2')->store('public/images');
        $foto3 = $request->file('foto3')->store('public/images');
        $foto4 = $request->file('foto4')->store('public/images');
        $foto5 = $request->file('foto5')->store('public/images');
        if( isset( $request->foto6 ) )
            $foto6 = $request->file('foto6')->store('public/images');
        $pdf = $request->file('ficha')->store('public/images');

        $dato = new Vehiculo;
        $dato->id_usuario = \Auth::user()->id;
        $dato->titulo= $request['titulo'];
        $dato->marca= $request['marca'];
        $dato->motor= $request['motor'];
        $dato->tipo= $request['tipo'];
        $dato->combustible= $request['combustible'];
        $dato->anio= $request['anio'];
        $dato->color= $request['color'];
        $dato->color_interior= $request['color_interior'];
        $dato->wheels= $request['wheels'];
        $dato->traccion= $request['traccion'];
        $dato->comunicate= $request['comunicate'];
        $dato->correo= $request['correo'];
        $dato->activo= True;
        $dato->foto1 = $foto1;
        $dato->foto2 = $foto2;
        $dato->foto3 = $foto3;
        $dato->foto4 = $foto4;
        $dato->foto5 = $foto5;
        if( isset( $request->foto6 ) )
            $dato->foto6 = $foto6;
        $dato->ficha = $pdf;
        $dato->popular = False;
        $dato->save();
        
        return redirect()->route('Vehiculo.index')
            ->with('success', 'Product created successfully');
    }

    public function show(Request $request, $id){
        
        $dato = Vehiculo::find($id);
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo/'.$id, 'Vehiculo/Mostrar/'.$dato->titulo, $request->userAgent());
        
        $marcas = Marca::all();
        $datos = Vehiculo::Where( 'tipo', $dato->tipo )->paginate(3);
        return view('vehiculo.show', compact('dato', 'datos','marcas'));
    }

    public function edit(Request $request, $id){
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo/'.$id.'/edit', 'Vehiculo/Editar', $request->userAgent());
        
        $dato = Vehiculo::find($id);
        $combustibles = Combustible::all();
        $marcas = Marca::all();
        $motors = Motor::all();
        $tipos =Tipo::all();
        return view('vehiculo.edit', compact('dato','combustibles','marcas','motors','tipos'));
    }

    public function update(Request $request, $id){
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo/'.$id.'/edit', 'Vehiculo/Actualizar', $request->userAgent());
        $dato = Vehiculo::find($id);
        $dato->id_usuario = \Auth::user()->id;
        $dato->titulo= $request['titulo'];
        $dato->marca= $request['marca'];
        $dato->motor= $request['motor'];
        $dato->tipo= $request['tipo'];
        $dato->combustible= $request['combustible'];
        $dato->anio= $request['anio'];
        $dato->color= $request['color'];
        $dato->color_interior= $request['color_interior'];
        $dato->wheels= $request['wheels'];
        $dato->traccion= $request['traccion'];
        $dato->comunicate= $request['comunicate'];
        $dato->correo= $request['correo'];
        if ($request->hasFile('foto1')){
            $foto1 = $request->file('foto1')->store('public/images');
            $dato->foto1 = $foto1;  
        }
        if ($request->hasFile('foto2')){
            $foto2 = $request->file('foto2')->store('public/images');
            $dato->foto2 = $foto2;  
        }
        if ($request->hasFile('foto3')){
            $foto3 = $request->file('foto3')->store('public/images');
            $dato->foto3 = $foto3;  
        }
        if ($request->hasFile('foto4')){
            $foto4 = $request->file('foto4')->store('public/images');
            $dato->foto4 = $foto4;  
        }
        if ($request->hasFile('foto5')){
            $foto5 = $request->file('foto5')->store('public/images');
            $dato->foto5 = $foto5;  
        }
        if ($request->hasFile('foto6')){
            $foto6 = $request->file('foto6')->store('public/images');
            $dato->foto6 = $foto6;  
        }

        if ($request->hasFile('ficha')){
            $ficha = $request->file('ficha')->store('public/images');
            $dato->ficha = $ficha;  
        }

        $dato->save();
       
        return redirect()->route('Vehiculo.index')
            ->with('success', 'Product updated successfully');
    }
    
    public function activo(Request $request, $id){
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo/'.$id.'/activo', 'Vehiculo/Activo', $request->userAgent());
        
        $dato = Vehiculo::find($id);
        $dato->activo= !($dato->activo);
        $dato->save();
        return redirect()->route('Vehiculo.index')
            ->with('success', 'Activo');
    }

    public function popular(Request $request, $id){
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo/'.$id.'/Popular', 'Vehiculo/Popular', $request->userAgent());
        
        $dato = Vehiculo::find($id);
        $dato->popular= !($dato->popular);
        $dato->save();
        return redirect()->route('Vehiculo.index')
            ->with('success', 'Popular');
    }


    public function tienda(Request $request){
        Visita::insertarVisita($request->ip(), 'index.php/Tienda', 'Vehiculo/Tienda', $request->userAgent());
        
        $datos = Vehiculo::paginate(12);
        $sucess ="";
        $combustibles = Combustible::all();
        $marcas = Marca::all();
        $motors = Motor::all();
        $tipos =Tipo::all();
        return view('vehiculo.tienda', compact('datos','sucess','combustibles','marcas','motors','tipos'));
    }


    public function filtro(Request $request){

        $anio  = $marca = $tipo = $combustible = "%";
        $msj = ''; 
       
       if($request->anio != '--'){
            $anio = $request->anio;
            $msj = $msj.' <b>Año:</b> '.$anio;
        }
        if($request->marca != '--'){
            $marca = $request->marca;
            $msj = $msj.' <b>Marca:</b> '.$marca;
        }
        if($request->tipo != '--'){
            $tipo = $request->tipo;
            $msj = $msj.' <b>Tipo de vehiculo:</b> '.$tipo;
        }
        if($request->combustible != '--'){
            $combustible = $request->combustible;
            $msj = $msj.' <b>Combustible:</b> '.$combustible;
        }
       $datos = Vehiculo::Where( 'anio', 'like', $anio)->where('marca', 'like', $marca)->where('tipo', 'like', $tipo)->where('combustible', 'like', $combustible)->get();
       $sucess = $msj;

       Visita::insertarVisita($request->ip(), $msj, 'Vehiculo/Filtro', $request->userAgent() );
       return $datos; 
    }

    public function inventarioTipo(Request $request, $tipo){
        Visita::insertarVisita($request->ip(), 'index.php/Tienda', 'Vehiculo/Tienda/'.$tipo, $request->userAgent());
        
        $datos = $sucess = $combustible = $marca = "-";

        if ($tipo == "Camioneta"){
            $marca = "Camioneta";
            $combustible = '%';
            $success ="Camioneta";
        }
        if ($tipo == "Vagoneta"){
            $marca = "Vagoneta";
            $combustible = '%';
            $success = "Vagoneta";
        }
        if ($tipo == "Semi-Nuevo"){
            $marca = "Semi-Nuevo";
            $combustible = '%';
            $success = "Semi-Nuevo";
        }
        if ($tipo == "Electrica"){
            $combustible = "Electrico";
            $marca = "%";
            $success = "Electrico";
        }
        if ($tipo == "Hibrido"){
            $combustible = "Hibrido" ;
            $marca = "%";
            $success = "Hibrido";
        }
        
        $datos = Vehiculo::Where('tipo', 'like', $marca)->where('combustible', 'like', $combustible)->paginate(12);
        $combustibles = Combustible::all();
        $marcas = Marca::all();
        $motors = Motor::all();
        $tipos =Tipo::all();
        return view('vehiculo.tienda', compact('datos','sucess','combustibles','marcas','motors','tipos'));
    }

    public function pagina(Request $request, $pagina ){
        Visita::insertarVisita($request->ip(), 'index.php/Pagina', 'Pagina/'.$pagina, $request->userAgent());
        return view($pagina);
    }

    public function correo(Request $request){
        
        
        $nombre     = $request->nombre."|".$request->email."|".$request->message."|".$request->titulo;
        foreach(['ventas@veloci.com.bo'] as $correo ){
            try {
                Mail::to($correo)->send(new VelociMail($nombre));
            } catch (\Throwable $th) {
                printf( "".$th);
            }   
        }
        
        Visita::insertarVisita($request->ip(), 'index.php/Correo/', $nombre, $request->userAgent());
        return ["mensaje"=>"enviado"];
    }

    public function buscar(Request $request){
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo/Buscar/', 'Vehiculo/Buscar/'.$request->busqueda, $request->userAgent());
        
        $datos = Vehiculo::Where('titulo', 'like', '%'.$request->busqueda.'%')->paginate(12);
        $sucess = "Busqueda de : ".$request->busqueda;
        $combustibles = Combustible::all();
        $marcas = Marca::all();
        $motors = Motor::all();
        $tipos =Tipo::all();
        return view('vehiculo.tienda', compact('datos','sucess','combustibles','marcas','motors','tipos'));
    }

    public function destroy(Request $request, $id){
        Visita::insertarVisita($request->ip(), 'index.php/Vehiculo/'.$id.'/edit', 'Vehiculo/Eliminar', $request->userAgent());
        
        $dato = Vehiculo::find($id);
        $dato->delete();
        return redirect('/Vehiculo');
    }
    

}


