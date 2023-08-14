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
                    <tr id="id{{$dato->id}}">
                        <td>{{$dato->titulo}}</td>
                        <td>{{$dato->tipo}}</td>
                        <td>{{$dato->contenido}}</td>
                        <td>
                            <a href="{{asset('index.php/Trabajo/'.$dato->id.'/edit')}}"  class="btn btn-warning" style="color: white;"  title="Modificar Artículo"><i class="bi bi-pencil-square"></i></a> 
                            @if($dato->activo)
                                <a href="{{asset('index.php/Trabajo/'.$dato->id.'/Activar')}}"  class="btn btn-primary" title="Deshabilitar"> <i class="bi bi-bell-fill"></i> </a> 
                            @else
                                <a href="{{asset('index.php/Trabajo/'.$dato->id.'/Activar')}}"  class="btn btn-danger" title="Habilitar"> <i class="bi bi-bell-slash-fill"></i> </a> 
                            @endif
                            <a href="#" onclick="eliminar('{{$dato->id}}')"  class="btn btn-danger" title="Eliminar Artículo"> <i class="bi bi-trash"></i> </a> 
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
            
            $.post('{{asset("index.php")}}/Trabajo/'+id, datos, function(response) {
                alert('Dato Eliminado');
            }, 'json').fail(function(xhr, status, error) {
                // Manejar errores
                console.error('Error:', error);
            });

        }

        
    }
</script>
@stop