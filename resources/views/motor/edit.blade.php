@extends('veloci')

@section('producto')
<form action="{{ route('Motor.update', $dato->id) }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body" >
    @csrf
    @method('PUT')
    <div class="row">
        <div class="form-group col-md-2 mb-2">  
        </div>

        <div class="form-group col-md-4 mb-4">
            <label> <b>Motor</b> </label>
            <input type="text" class="form-control mt-1" name="motor" placeholder="1500cc " required  autocomplete="off" value="{{$dato->motor}}">
        </div>

        <div class="form-group col-md-4 mb-4"><br/>
            <input type="submit" value="Actualizar" class="btn btn-warning">
        </div>    
    </div>
</form>
@stop