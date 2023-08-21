@extends('veloci')

@section('producto')
<section class="section-padding ">
    <div class="col-lg-12 col-12 text-center ">
        <h3>Editar Marca</h3>
    </div>
    <div class="container">
        <div class="col-lg-4 col-4 p-0">
            <a href="{{asset('index.php/Marca')}}" class="btn btn-secondary"> <i class="bi bi-arrow-left-circle"></i> <span>Volver</span> </a>
        </div>
        <div class="row mt-3">
            <form action="{{ route('Marca.update', $dato->id) }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body" >
                @csrf
                @method('PUT')
                <div class="row">
                    
                    <div class="form-group col-md-3 mb-3">
                        <label> <b>Logo de Marca</b> </label>
                        <input type="file" name="imagen" autocomplete="off"  >
                        <img src="{{asset($dato->imagen)}}" alt="">   
                    </div>


                    <div class="form-group col-md-4 mb-4">
                        <label> <b>Marca:</b> </label>
                        <input type="text" class="form-control mt-1" name="marca" placeholder="Toyota " required  autocomplete="off" value="{{$dato->marca}}">
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