@extends('veloci')

@section('producto')
<br/><br/>
  
<form action="{{ route('Trabajo.store') }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body" >
    @csrf
    <div class="row">
        <div class="form-group col-md-4 mb-4">
            <label> <b>Titulo</b> </label>
            <input type="text" class="form-control mt-1" name="titulo" placeholder="Requirimiento de Personal" required  autocomplete="off" >
        </div>

        <div class="form-group col-md-4 mb-4">
            <label> <b>Tipo</b> </label>
            <input type="text" class="form-control mt-1" name="tipo" placeholder="CHAPISTA" required  autocomplete="off">
        </div>

        <div class="form-group col-md-4 mb-4">
            <label> <b>Ficha PDF</b> </label><br/>
            <input type="file" name="pdf"   autocomplete="off"> <a> <i class="fa fa-download"></i> PDF </a> 
        </div>

        <div class="form-group col-md-6 mb-6">
            <label> <b>Contenido</b> </label>
            <textarea name="contenido" id="contenido"  rows="10" class="form-control mt-1" name="contenido" autocomplete="off" >
            </textarea>
        </div>
    </div>
        
    
    <div class="row">
        <div class="form-group col-md-3 mb-3">
            <input type="submit" value="Insertar" class="btn btn-primary">
        </div>    
    </div>

</form>
@stop