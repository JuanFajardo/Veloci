@extends('veloci')

@section('producto')
<section class="section-padding ">
    <div class="col-lg-12 col-12 text-center ">
         <h3>Administrar Vehículos </h3>
    </div>
    <div class="container mt-3">
        <div class="row">

            <div class="col-lg-4 col-4 p-0">
                 <a href="{{asset('index.php/Vehiculo/create')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> <span>Nuevo </span> </a>
            </div>
            <div class="col-lg-4 col-4 p-0">
                <h4><p class="badge badge-info">  Cantidad de autos: <b>{{count($datos)}}</b></p> </h4>
            </div>
            <div class="col-lg-4 col-4 p-0">
                <h4><p class="badge badge-info">  Cantidad de populares: <b>{{$populares}}</b> </p> </h4>
            </div>
        </div>

        <table id="tablaAgenda" class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th> Titulo </th>
                    <th> Tipo </th>
                    <th> Combustible </th>
                    <th> Año </th>
                    <th> Color </th>
                    <th> Acción </th>
                </tr>
            </thead>
            <tbody>
            @foreach($datos as $dato)
                <tr id="id{{$dato->id}}">
                    <td>{{$dato->titulo}}</td>
                    <td>{{$dato->tipo}}</td>
                    <td>{{$dato->combustible}}</td>
                    <td>{{$dato->anio}}</td>
                    <td>{{$dato->color}}</td>
                    <td>
                        <a href="{{asset('index.php/Tienda/'.$dato->id)}}" target="_blank"  class="btn btn-success" title="Ver Vehículo"><i class="bi bi-eye"></i></a> 

                        <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/edit')}}"  class="btn btn-warning" style="color: white;" title="Modificar Vehículo"><i class="bi bi-pencil-square"></i></a> 
                        @if($dato->activo)
                            <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/activo')}}" class="btn btn-primary" title="Desactivar"><i class="bi bi-bell-fill"></i> </a> 
                        @else
                            <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/activo')}}" class="btn btn-danger" title="Activar"><i class="bi bi-bell-slash-fill"></i> </a> 
                        @endif

                        @if($dato->popular)
                            <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/popular')}}" class="btn btn-primary" title="No Popular"><i class="bi bi-camera-video"></i></a> 
                        @else
                            <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/popular')}}" class="btn btn-danger" title="Popular"><i class="bi bi-camera-video-off"></i></a> 
                        @endif
                        <a href="#" onclick="eliminar('{{$dato->id}}')"  class="btn btn-danger" title="Eliminar Vehículo"> <i class="bi bi-trash"></i> </a> 
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</section>

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

    function eliminar(id){
        var resultado = confirm("¿Estás seguro de eliminarlo?");
        if (resultado) {
            var fila='id'+id;
            $("#"+fila).hide();

            const csrfToken = $('meta[name="csrf-token"]').attr('content');
            const datos = {
                _token: csrfToken,
                _method: "DELETE",
            };    
            
            $.post('{{asset("index.php")}}/Vehiculo/'+id, datos, function(response) {
                alert('Dato Eliminado');
            }, 'json').fail(function(xhr, status, error) {
                // Manejar errores
                console.error('Error:', error);
            });

        }

        
    }
</script>
@stop