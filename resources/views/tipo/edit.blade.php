@extends('veloci')

@section('producto')
<section class="section-padding ">
    <div class="col-lg-12 col-12 text-center ">     
        <h3>Editar Tipo de Vehículo</h3>
    </div>
    <div class="container">
        <div class="col-lg-4 col-4 p-0">
            <a href="{{asset('index.php/Tipo')}}" class="btn btn-secondary"> <i class="bi bi-arrow-left-circle"></i> <span>Volver</span> </a>
        </div>
        <div class="row mt-3">
            <form action="{{ route('Tipo.update', $dato->id) }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body" >
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-2 mb-2">  
                    </div>

                    <div class="form-group col-md-4 mb-4">
                        <label> <b>Tipo de Vehículo:</b> </label>
                        <input type="text" class="form-control mt-1" name="tipo" placeholder="Electrico " required  autocomplete="off" value="{{$dato->tipo}}">
                    </div>

                    <div class="form-group col-md-4 mb-4"><br/>
                        <input type="submit" value="Actualizar" class="btn btn-warning">
                    </div>    
                </div>
            </form>
        </div>
    </div>
</section>

@stop