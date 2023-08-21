@extends('veloci')

@section('producto')
<section class="section-padding ">
    
    <div class="col-lg-12 col-12 text-center ">
        <h3>Reportes</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="card">
                    <div class="card-header">
                        Reporte Mensual 
                    </div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Fecha Inicio:</label>
                                </div>
                                <div class="col-auto">
                                <input type="date" class="form-control" id="creationDateFromCampaign" value="2021-01-01" /></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Fecha Final:</label>
                                </div>
                                <div class="col-auto">
                                    
                                    <input type="date" class="form-control" id="creationDateFromCampaign" value="2021-01-01" /> 
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                        </div>
                    </form>
                    <div class="col-lg-12 col-md-12 col-12 mb-4 mb-lg-0 mt-4">
                        <canvas id="myChart" width="250" height="100"></canvas>
                    </div>   
                </div>
            </div>
                
            
        </div>
        <div class="row mt-4">
            
            <div class="card">
                <div class="card-header">
                    Reporte Diaria 
                </div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Fecha Inicio:</label>
                                </div>
                                <div class="col-auto">
                                <input type="date" class="form-control" id="creationDateFromCampaign" value="2021-01-01" /></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Fecha Final:</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" class="form-control" id="creationDateFromCampaign" value="2021-01-01" /></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                        </div>
                    </form>
                    <div class="col-lg-12 col-md-12 col-12 mb-4 mb-lg-0 mt-4">
                        <canvas id="myChart2" width="250" height="100"></canvas>
                    </div>   
                </div>
            </div>
        </div>
        <div class="row mt-4">
            
            <div class="card">
                <div class="card-header">
                    Lista de Segimiento por
                </div>
                <div class="card-body">
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
                        <a href="{{asset('index.php/Visita/'.base64_encode($dato->titulo))}}"  class="btn btn-info" title="Ver Detalle" style="color: white;"> <i class="bi bi-card-list"></i> </a> 
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
                       
                </div>
            </div>
        </div>
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
    fuction Cargargrafica(){
        //var ctx = document.getElementById('myChart').getContext('2d');
        
        $.get( '{{asset("index.php")}}/Grafica', function( data ) {
            //$( ".result" ).html( data );
            //alert( "Load was p" );
            alert(data);
        });
        // Datos del gráfico
        /*//var data = {
           // label=g
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            datasets: [{
            label: 'Ventas',
            data: [[ 19, 3, 5, 2]],
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
        });*/
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
            data: [ 19, 3, 5, 2],
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
            data: [ 19, 3, 5, 2],
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