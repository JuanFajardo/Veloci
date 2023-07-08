@extends('veloci')

@section('producto')
<br>
<div class="row">

    <div class="col-lg-4 col-4 p-0"></div>
    <div class="col-lg-4 col-4 p-0">
        &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Marca/create')}}" class="btn btn-success"> <b>Nuevo Marca</b> </a>
    </div>
    <div class="col-lg-4 col-4 p-0"></div>
</div>
<br/>

<table id="tablaAgenda" class="table table-striped table-bordered" >
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
            <td>{{$dato->marca}}</td>
            <td>
                <a href="{{asset('index.php/Marca/'.$dato->id.'/edit')}}"  class="btn btn-warning">Modificar</a> 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
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