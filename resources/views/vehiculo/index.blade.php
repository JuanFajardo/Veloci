@extends('veloci')

@section('producto')
<section class="section-padding ">
    
    <div class="container mt-3">
        <div class="row  ">
            <div class="col-lg-12 col-12  mb-4 text-center">
                <h2 class="animated bounce">Estadistica</h2>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        
                        <div class="counter-thumb text-center">
                            <span class="text-gray counter-text mt-2">Visítas</span>
                            <span class="counter-number mt-2" data-from="1"  data-to="{{$visitasA}}" data-speed="1000" style="color: rgb(26, 52, 109);"> </span>
                            
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <div class="counter-thumb text-center">
                            <span class="text-gray counter-text mt-2">Vehículos</span> 
                            <span class="counter-number mt-2" data-from="1" data-to="{{$vehiculosA}}"  data-speed="1000" style="color: rgb(26, 52, 109);"></span>
                            
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <div class="counter-thumb text-center">
                            <span class="text-gray counter-text mt-2">Populares</span> 
                            <span class="counter-number mt-2" data-from="1" data-to="{{$populares}}" data-speed="1000" style="color: rgb(26, 52, 109);"></span>
                            
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <div class="counter-thumb text-center">
                            <span class="text-gray counter-text mt-2">Marcas</span> 
                            <span class="counter-number mt-2" data-from="1" data-to="{{$marcasA}}" data-speed="1000" style="color: rgb(26, 52, 109);"></span>
                            
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        
                        <div class="counter-thumb text-center">
                            <span class="text-gray counter-text mt-2">Tipos</span>
                            <span class="counter-number mt-2" data-from="1" data-to="{{$tiposA}}"  data-speed="1000" style="color: rgb(26, 52, 109);"> </span>
                            
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <hr style="width:1100px; height:2px; background:rgb(15, 38, 114)">
        <div class="row">
            <div class="col-lg-12 col-12  mb-4 text-center">
                <h2 class="animated bounce">Vehículos</h2>
            </div>

            <div class="col-lg-4 col-4 mt-4">
                 <a href="{{asset('index.php/Vehiculo/create')}}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> <span>Nuevo </span> </a>
            </div>
            <table id="tablaAgenda" class="table table-striped table-bordered mt-4" >
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
    <script>
      // Obtén el contexto del lienzo
        var ctx = document.getElementById('myChart').getContext('2d');
        

        // Datos del gráfico
        var data = {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            datasets: [{
            label: 'Ventas',
            data: [{{$visitasA}}, 19, 3, 5, 2],
            backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de fondo
            borderColor: 'rgba(75, 192, 192, 1)', // Color del borde
            borderWidth: 1 // Ancho del borde
            }]
        };

        // Opciones del gráfico
        var options = {
            scales: {
            y: {
                beginAtZero: true // Iniciar el eje y en cero
            }
            }
        };

        // Crear el gráfico de barras
        var myChart = new Chart(ctx, {
            type: 'line', // Tipo de gráfico
            data: data, // Datos del gráfico
            options: options // Opciones del gráfico
        });
    </script>
    <script>
        // Obtén el contexto del lienzo
        var ctx = document.getElementById('myChart2').getContext('2d');
        

        // Datos del gráfico
        
        var data = {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
            datasets: [{
            label: 'Ventas',
            data: [{{$vehiculosA}}, 19, 3, 5, 2],
            backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de fondo
            borderColor: 'rgba(75, 192, 192, 1)', // Color del borde
            borderWidth: 1 // Ancho del borde
            }]
        };

        // Opciones del gráfico
        var options = {
            scales: {
            y: {
                beginAtZero: true // Iniciar el eje y en cero
            }
            }
        };

        // Crear el gráfico de barras
        var myChart = new Chart(ctx, {
            type: 'bar', // Tipo de gráfico
            data: data, // Datos del gráfico
            options: options // Opciones del gráfico
        });
    </script>
@stop