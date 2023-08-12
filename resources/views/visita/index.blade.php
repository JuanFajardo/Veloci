@extends('veloci')

@section('producto')
<section class="section-padding ">
    <div class="col-lg-12 col-12 text-center ">
        <h3>Agregar Nueva Marca </h3>
    </div>
    <div class="container mt-5">
        <div class="row mt-3">
        <table id="tablaAgenda" class="table table-striped table-bordered " >
            <thead>
                <tr> 
                    <th> Pagina </th>
                    <th> Cantidad </th>
                    <th> Accion </th>
                </tr>
            </thead>
            <tbody>
            @foreach($datos as $dato)
                <tr id="id{{$dato->id}}">
                    <td>{{$dato->titulo}}</td>
                    <td>{{$dato->cantidad}} </td>
                    <td>
                        <a href="{{asset('index.php/Visita/'.base64_encode($dato->titulo))}}"  class="btn btn-info"> <i class="bi bi-card-list"></i> Detalles </a> 
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
            "order": [[ 1, 'desc']],
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
            
            $.post('{{asset("index.php")}}/Marca/'+id, datos, function(response) {
                alert('Dato Eliminado');
            }, 'json').fail(function(xhr, status, error) {
                // Manejar errores
                console.error('Error:', error);
            });

        }

        
    }
</script>
@stop