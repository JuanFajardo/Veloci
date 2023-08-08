@extends('veloci')

@section('producto')
<Section class="section-padding ">
    <div class="col-lg-12 col-12 text-center ">
         <h3>Administrar Clasificados </h3>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4 col-4 p-0">
                <a href="{{asset('index.php/Trabajo/create')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> <span>Nuevo </span> </a>
            </div>
        </div>
        <div class="row mt-3">    
            <table id="tablaAgenda" class="table table-striped table-bordered " >
                <thead>
                    <tr>
                        <th> Título </th>
                        <th> Tipo </th>
                        <th> Contenido </th>
                        <th> Accion </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datos as $dato)
                    <tr>
                        <td>{{$dato->titulo}}</td>
                        <td>{{$dato->tipo}}</td>
                        <td>{{$dato->contenido}}</td>
                        <td>
                            <a href="{{asset('index.php/Trabajo/'.$dato->id.'/edit')}}"  class="btn btn-warning">Modificar</a> 
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</Section>


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