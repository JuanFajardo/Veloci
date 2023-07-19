@extends('veloci')

@section('producto')
<section class="section-padding ">
    <div class="col-lg-12 col-12 text-center ">
        <h3>Agregar Nueva Marca </h3>
    </div>
    <div class="container mt-5">
        <div class="col-lg-12 col-12 p-0">
            <a href="{{asset('index.php/Vehiculo/create')}}" class="btn btn-warning"> <i class="bi bi-arrow-left-circle"></i> <span>Volver</span> </a>
            <a href="{{asset('index.php/Marca/create')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> <span>Nuevo</span> </a>
        </div>
        <div class="row mt-3">
       
        <table id="tablaAgenda" class="table table-striped table-bordered " >
            <thead>
                <tr> 
                    <th> Id </th>
                    <th> Marca </th>
                    <th> Accion </th>
                </tr>
            </thead>
            <tbody>
            @foreach($datos as $dato)
                <tr>
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->marca}} </td>
                    <td>
                        <a href="{{asset('index.php/Marca/'.$dato->id.'/edit')}}"  class="btn btn-warning">Modificar</a> 
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
<br>

@stop

@section('js')
<script>
    $(document).ready(function(){
        $('#tablaAgenda').DataTable({
            "order": [[ 0, 'asc']],
            "language": {
                "bDeferRender": true,
                "sEmtpyTable": "No ay registros",
                "decimal": ",",
                "thousands": ".",
                "lengthMenu": "Mostrar _MENU_ ",
                "zeroRecords": "No se encontro nada,  lo siento",
                "info": "Mostrar paginas [_PAGE_] de [_PAGES_]",
                "infoEmpty": "No ay entradas permitidas",
                "search": "Buscar ",
                "infoFiltered": "(Busqueda de _MAX_ registros en total)",
                "oPaginate":{
                    "sLast":"Final",
                    "sFirst":"Principio",
                    "sNext":"Siguiente",
                    "sPrevious":"Anterior"
                }
            }
        });
    });
</script>
@stop