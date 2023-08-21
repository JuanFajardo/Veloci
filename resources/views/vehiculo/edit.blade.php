@extends('veloci')

@section('producto')
<br/><br/><br/><br/>
<style>
    label {
        font-weight: bold;
    }
</style>  
<section>
    <div class="container">
        <div class="col-lg-12 col-12 text-center ">
            <h3>Editar Vehículo</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-4 p-0">
                <a href="{{asset('index.php/Vehiculo')}}" class="btn btn-secondary" style="color: white;"> <i class="bi bi-arrow-left-circle"></i> <span>Volver</span> </a>
            </div>
            <form action="{{ route('Vehiculo.update', $dato->id) }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body mt-3" >
            @csrf
            @method('PUT')

            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Título:</b> </label>
                    <input type="text" class="form-control mt-1" name="titulo" placeholder="2022 Jeep Gladiator Willys" required  autocomplete="off" value="{{$dato->titulo}}">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Marca:</b> </label>
                    <input type="text" class="form-control mt-1" name="marca" placeholder="Toyota" required  autocomplete="off" value="{{$dato->marca}}" list="marca-list">
                    <datalist id="marca-list"> 
                        @foreach($marcas as $marca)
                            <option value="{{$marca->marca}}">{{$marca->marca}}</option> 
                        @endforeach
                    </datalist>
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Motor:</b> </label>
                    <input type="text" name="motor" class="form-control mt-1" placeholder="--" required  autocomplete="off" list="motor-list" value="{{$dato->motor}}">
                    <datalist id="motor-list"> 
                        @foreach($motors as $motor)
                            <option value="{{$motor->motor}}">{{$motor->motor}}</option> 
                        @endforeach
                    </datalist> 
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Tipo:</b> </label>
                    <input type="text" class="form-control mt-1" name="tipo" placeholder="Camioneta" required  list="tipo-list" autocomplete="off" value="{{$dato->tipo}}">
                    <datalist id="tipo-list"> 
                        @foreach($tipos as $tipo)
                            <option value="{{$tipo->tipo}}">{{$tipo->tipo}}</option> 
                        @endforeach
                    </datalist> 
                </div>
            </div>
            
            
            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Combustible:</b> </label>
                    <input type="text" class="form-control mt-1" name="combustible" placeholder="Gasolina" required  list="combustible-list" autocomplete="off" value="{{$dato->combustible}}">
                    <datalist id="combustible-list">
                        @foreach($combustibles as $combustible)
                            <option value="{{$combustible->combustible}}">{{$combustible->combustible}}</option> 
                        @endforeach
                    </datalist>
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Año:</b> </label>
                    <input type="text" class="form-control mt-1" name="anio" placeholder="2022" required  list="anio-list" autocomplete="off" value="{{$dato->anio}}">
                    <datalist id="anio-list"> 
                        @for($i=date('Y'); $i>=2018; $i--)
                            <option value="{{$i}}">{{$i}}</option> 
                        @endfor
                    </datalist>
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Color:</b> </label>
                    <input type="text" class="form-control mt-1" name="color" placeholder="Verde" required  autocomplete="off" value="{{$dato->color}}">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Color Interior:</b> </label>
                    <input type="text" class="form-control mt-1" name="color_interior" placeholder="Negro – Plomo" required  autocomplete="off" value="{{$dato->color_interior}}">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Neumáticos:</b> </label>
                    <input type="text" class="form-control mt-1" name="wheels" placeholder="LT 255/75SR17C" required  autocomplete="off" value="{{$dato->wheels}}">  
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Tracción:</b> </label>
                    <input type="text" class="form-control mt-1" name="traccion" placeholder="4x4" required  autocomplete="off" value="{{$dato->traccion}}">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Whatsapp:</b> </label>
                    <input type="text" class="form-control mt-1" name="comunicate" placeholder="59177889944" required  autocomplete="off" value="{{$dato->comunicate}}">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Correo:</b> </label>
                    <input type="text" class="form-control mt-1" name="correo" placeholder="correo@correo.com" required  autocomplete="off" value="{{$dato->correo}}">
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 1:</b> </label>
                    <input type="file" name="foto1" autocomplete="off"> 
                    <img class="card-img img-fluid" src="{{asset('public/images/'.explode("/", $dato->foto1)[2] )}}">
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label> <b> Foto 2:</b> </label>
                    <input type="file" name="foto2" autocomplete="off">
                    <img  class="card-img img-fluid" src="{{asset('public/images/'.explode("/", $dato->foto2)[2] )}}">
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 3:</b> </label>
                    <input type="file" name="foto3" autocomplete="off">
                    <img  class="card-img img-fluid"  src="{{asset('public/images/'.explode("/", $dato->foto3)[2] )}}">
                </div>
                
            </div>

            <div class="row">
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 4:</b> </label>
                    <input type="file" name="foto4"   autocomplete="off">
                    <img  class="card-img img-fluid"  src="{{asset('public/images/'.explode("/", $dato->foto4)[2] )}}" width="50px">
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 5:</b> </label>
                    <input type="file" name="foto5"   autocomplete="off">
                    <img  class="card-img img-fluid"  src="{{asset('public/images/'.explode("/", $dato->foto5)[2] )}}" width="50px">
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label> <b>Foto 6:</b> </label>
                    <input type="file" name="foto6"   autocomplete="off">
                    <img  class="card-img img-fluid"  src="{{asset('public/images/'.explode("/", $dato->foto6)[2] )}}" width="50px">
                </div>
                
            </div>
            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label> <b>Ficha Técnica:</b> </label>
                    <input type="file" name="ficha"   autocomplete="off"> <a href="{{asset('public/images/'.explode("/", $dato->ficha)[2] )}}" class="btn btn-primary"> <i class="fa fa-download"></i> Ficha</a> 
                </div>
               
            </div>
            <div class="form-group col-md-3 mb-3">
                <input type="submit" value="Actualizar" class="btn btn-warning">
            </div>

        </form>
        </div>
    </div>
</section>  

@stop