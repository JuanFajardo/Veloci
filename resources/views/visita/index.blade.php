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
                                <input type="date" class="form-control" id="inicio" value="{{date('Y')}}-01-01" /></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Fecha Final:</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" class="form-control" id="fin" value="{{date('Y')}}-12-31" /> 
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary mb-3" onclick="cargarGrafica()">Buscar</button>
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
                    <!--<form class="row g-3">
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Fecha Inicio:</label>
                                </div>
                                <div class="col-auto">
                                <input type="date" class="form-control" id="creationDateFromCampaign" value="{{date('Y')}}-01-01" /></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Fecha Final:</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" class="form-control" id="creationDateFromCampaign" value="{{date('Y')}}-01-01" /></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                        </div>
                    </form>-->
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

    function mes(mes){
        var msj="";
        switch(mes){
            case 1: msj="Enero"; break;
            case 2: msj="Febrero"; break;
            case 3: msj="Marzo"; break;
            case 4: msj="Abril"; break;
            case 5: msj="Mayo"; break;
            case 6: msj="Junio"; break;
            case 7: msj="Julio"; break;
            case 8: msj="Agosto"; break;
            case 9: msj="Septiembre"; break;
            case 10: msj="Octubre"; break;
            case 11: msj="Noviembre"; break;
            case 12: msj="Diciembre"; break;
        }
        return msj;
    }
    function cargarGrafica(){
        
        var inicio = $('#inicio').val();
        var fin = $('#fin').val();
        meses = [];
        datos = [];

        $.getJSON( '{{asset("index.php")}}/Grafica/'+inicio+'/'+fin, function( data ) {
            for (var i = 0; i < data.length; i++) {
                var dato = data[i];
                datos.push( dato.total ) ;
                console.log(dato.mes);
                console.log(mes(dato.mes));
                meses.push( mes(dato.mes) ) ;
            }
        });

        var ctx = document.getElementById('myChart').getContext('2d');
        // Datos del gráfico
        var data = {
            labels: meses,//['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            datasets: [{
            label: 'Visitas',
            data: datos, //[[ 19, 3, 5, 2]],
            backgroundColor: 'rgba(3, 3, 129, 1.0)', // Color de fondo
            borderColor: 'rgba(3, 3, 129, 1.0)', // Color del borde
            borderWidth: 1 // Ancho del borde
            }]
        };
        // Opciones del gráfico
        var options = { scales: { y: { beginAtZero: true }}};

        var myChart = new Chart(ctx, {
            type: 'line', // Tipo de gráfico
            data: data, // Datos del gráfico
            options: options // Opciones del gráfico
        });
        
        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myChart2 = new Chart(ctx2, {
            type: 'bar', // Tipo de gráfico
            data: data, // Datos del gráfico
            options: options // Opciones del gráfico
        });

    
    }

    $(document).ready(function(){
        cargarGrafica();

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
    <script>
       const printCharts =() =>{

       }
       printChart()
    </script>
    
@stop