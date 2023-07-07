@extends('veloci')

@section('producto')
<br/><br/>
  
<form action="{{ route('Motor.store') }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body" >
    @csrf
    <div class="row">
        <div class="form-group col-md-2 mb-2">
            
        </div>

        <div class="form-group col-md-4 mb-4">
            <label> <b>Motor</b> </label>
            <input type="text" class="form-control mt-1" name="motor" placeholder="1500cc " required  autocomplete="off" >
        </div>

        <div class="form-group col-md-4 mb-4"><br/>
            <input type="submit" value="Insertar" class="btn btn-primary">
        </div>    
    </div>
</form>
@stop