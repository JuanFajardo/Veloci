@extends('veloci')

@section('producto')
<br/><br/>
<style>
    label {
        font-weight: bold;
    }
</style>  
<section class="">
    <div class="col-lg-12 col-12 text-center ">
         <h3>Nuevo Vehículo</h3>
    </div>
            
    <div class="container">
        <div class="col-lg-12 col-12 p-0 mt-5">
                 <a href="{{asset('index.php/Vehiculo')}}" class="btn btn-warning"> <i class="bi bi-arrow-left-circle"></i> <span>Volver</span> </a>
                 <a href="{{asset('index.php/Marca')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> <span>Agregar Marca</span> </a>
                 <!--<a href="{{asset('index.php/Motor')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> <span>Agregar Motor</span> </a>-->
                 <a href="{{asset('index.php/Tipo')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> <span>Agregar Tipo</span> </a>
                 <a href="{{asset('index.php/Combustible')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> <span>Agregar Combustible</span> </a>
            </div>
            
        <div class="row mt-3">
            
            <form action="{{ route('Vehiculo.store') }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body" >
            @csrf

            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Título:</b> </label>
                    <input type="text" class="form-control mt-1" name="titulo" placeholder="2022 Jeep Gladiator Willys" required  autocomplete="off" >
                </div>
                <div class="form-group col-md-3 mb-3">
                   <label> <b>Marca:</b><!--  <small><a href="{{asset('index.php/Marca')}}">Agregar Marca</a> </small> --></label>
                    <input type="text" class="form-control mt-1" name="marca" placeholder="Toyota" required  autocomplete="off" list="marca-list">
                    <datalist id="marca-list"> 
                        @foreach($marcas as $marca)
                            <option value="{{$marca->marca}}">{{$marca->marca}}</option> 
                        @endforeach
                    </datalist>
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Motor:</b> <!--<small><a href="{{asset('index.php/Motor')}}">Agregar Motor</a> </small> --></label>
                    <input type="text" name="motor" class="form-control mt-1" placeholder="--" required list="motor-list" autocomplete="off">
                    <datalist id="motor-list"> 
                        @foreach($motors as $motor)
                            <option value="{{$motor->motor}}">{{$motor->motor}}</option> 
                        @endforeach
                    </datalist>      
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Tipo:</b> <!--<small><a href="{{asset('index.php/Tipo')}}">Agregar Tipo</a> </small> --></label>
                    <input type="text" class="form-control mt-1" name="tipo" placeholder="Camioneta" required  list="tipo-list" autocomplete="off" >
                    <datalist id="tipo-list"> 
                        @foreach($tipos as $tipo)
                            <option value="{{$tipo->tipo}}">{{$tipo->tipo}}</option> 
                        @endforeach
                    </datalist>        
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Combustible:</b><!--<small><a href="{{asset('index.php/Combustible')}}">Agregar Combustible</a> </small> --></label>
                    <input type="text" class="form-control mt-1" name="combustible" placeholder="Gasolina" required  list="combustible-list" autocomplete="off">
                    <datalist id="combustible-list">
                        @foreach($combustibles as $combustible)
                            <option value="{{$combustible->combustible}}">{{$combustible->combustible}}</option> 
                        @endforeach
                    </datalist>
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Año:</b> </label>
                    <input type="text" class="form-control mt-1" name="anio" placeholder="2022" required  list="anio-list" autocomplete="off" >
                    <datalist id="anio-list"> 
                        @for($i=date('Y'); $i>=2018; $i--)
                            <option value="{{$i}}">{{$i}}</option> 
                        @endfor
                    </datalist>
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Color:</b> </label>
                    <input type="text" class="form-control mt-1" name="color" placeholder="Verde" required  autocomplete="off">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Color Interior:</b> </label>
                    <input type="text" class="form-control mt-1" name="color_interior" placeholder="Negro – Plomo" required  autocomplete="off" >
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Neumáticos:</b> </label>
                    <input type="text" class="form-control mt-1" name="wheels" placeholder="LT 255/75SR17C" required  autocomplete="off" >  
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Tracción:</b> </label>
                    <input type="text" class="form-control mt-1" name="traccion" placeholder="4x4" required  autocomplete="off" >
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Whatsapp:</b> </label>
                    <input type="text" class="form-control mt-1" name="comunicate" placeholder="59177889944" required value="69612086"  autocomplete="off" >
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Correo:</b> </label>
                    <input type="text" class="form-control mt-1" name="correo" placeholder="correo@correo.com" required value="ventas@veloci.com.bo" autocomplete="off" >
                </div>
            </div>


            <div class="row ">
                <h3>Galeria</h3>
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 1:</b> </label>
                    <input type="file" name="foto1" autocomplete="off" required> 
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label> <b> Foto 2:</b> </label>
                    <input type="file" name="foto2" autocomplete="off" required>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 3:</b> </label>
                    <input type="file" name="foto3" autocomplete="off" required>
                </div>
                
            </div>

            <div class="row mt-3">
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 4:</b> </label>
                    <input   type="file" name="foto4"   autocomplete="off" required>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 5:</b> </label>
                    <input type="file" name="foto5"   autocomplete="off" required>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 6:</b> </label>
                    <input type="file" name="foto6"   autocomplete="off">
                </div>
                
            </div>
            <div class="row mt-3">
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Ficha Técnica:</b> </label>
                    <input type="file" name="ficha"   autocomplete="off">  
                </div>
               
            </div>
            <div class="form-group col-md-9 mb-9">
                <input type="submit" value="Insertar" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>

</section> 

@stop