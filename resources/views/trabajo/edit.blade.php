@extends('veloci')

@section('producto')
<form action="{{ route('Trabajo.update', $dato->id) }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body" >
    @csrf
    @method('PUT')

    <div class="row">
        <div class="form-group col-md-4 mb-4">
            <label> <b>Titulo</b> </label>
            <input type="text" class="form-control mt-1" name="titulo" placeholder="Requirimiento de Personal" required  autocomplete="off" value="{{$dato->titulo}}">
        </div>

        <div class="form-group col-md-4 mb-4">
            <label> <b>Tipo</b> </label>
            <input type="text" class="form-control mt-1" name="tipo" placeholder="CHAPISTA" required  autocomplete="off" value="{{$dato->tipo}}">
        </div>

        <div class="form-group col-md-4 mb-4">
            <label> <b>Ficha PDF</b> </label><br/>
            <input type="file" name="pdf"   autocomplete="off"> <a> <i class="fa fa-download"></i> PDF </a> 
        </div>

        <div class="form-group col-md-6 mb-6">
            <label> <b>Contenido</b> </label>
            <textarea name="contenido" id="contenido"  rows="10" class="form-control mt-1" name="contenido" autocomplete="off" >
                {{$dato->contenido}}
            </textarea>
        </div>
    </div>
        
    
    <div class="row">
        <div class="form-group col-md-3 mb-3">
            <input type="submit" value="Actualizar" class="btn btn-warning">
        </div>
    </div>

</form>
@stop