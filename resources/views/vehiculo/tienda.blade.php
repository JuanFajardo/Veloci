@extends('veloci')

@section('producto')

<section class="section-padding section-bg" id="section_3">
    <div class="container-fluid">
        <div class="text-left mb-4">
            @if( isset($busqueda) )
              <h2>{{$busqueda}}</h2>
            @else
              @if( strlen($sucess) > 2 )
                <h2>{!! $sucess !!}</h2>
              @else
                <h2>Inventario</h2>
              @endif
            @endif
            
            <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
        </div>
        <div class="row">
            <div class="col-lg-3 col-12 mb-4 ">
              <div class="row">
             
              <form action="{{route('vehiculo.buscar')}}" method="POST" >
                @csrf
                <div class="input-group">                      
                  <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="Buscar" name="busqueda" id="example-search-input">
                  <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit">
                      <i class="bis bi-search"></i>
                    </button>
                  </span>        
                </div>
              </form>
              <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h6 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      Año:
                    </button>
                  </h6>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                      <ul class="list-group" >
                        @for($i=date('Y'); $i>=2019; $i--)
                        <li class="list-group-item">
                          <input class="anio form-check-input me-1" type="radio" name="anio" value="{{$i}}" >{{$i}}
                        </li>
                        @endfor
                      </ul>
                    </div>
                  </div>
              </div>
              <div class="accordion-item">
                <h6 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" >
                   Marca:
                  </button>
                </h6>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <ul class="list-group">
                      @foreach($marcas as $marca)
                      <li class="list-group-item">
                        <input class="form-check-input me-1" type="radio" name="marca" value="{{$marca->marca}}">{{$marca->marca}}
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h6 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" >
                    Tipo de vehículo:
                  </button>
                </h6>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" >
                  <div class="accordion-body">
                    <ul class="list-group">
                      @foreach($tipos as $tipo)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="radio" name="tipo" value="{{$tipo->tipo}}">{{$tipo->tipo}}
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h6 class="accordion-header" id="panelsStayOpen-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" >
                    Combustible:
                  </button>
                </h6>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" >
                  <div class="accordion-body">
                    <ul class="list-group">
                      @foreach($combustibles as $combustible)
                      <li class="list-group-item">
                        <input class="form-check-input me-1" type="radio" name="combustible" value="{{$combustible->combustible}}" >{{$combustible->combustible}}
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              </div>
              <div class="mt-5">
              <center><a class="custom-btn-bo" href="#collapseFour" id="limpiar"> <i class="bi bi-filter"> </i> Limpiar Buscador </a></center>
            </div>
            </div>
            </div>
            
            <div class="col-lg-9 col-12 mb-4" id="principal">
              <div class="row">
                @foreach ($datos as $dato)
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="d-block" target="_blank">
                            <img src="{{asset('public/images/'.explode("/", $dato->foto1)[2] )}}" class="custom-block-image img-fluid" alt="">
                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">{{$dato->titulo}}</h5>
                                    <hr style="width: 230px;">
                                    <p class="mb-0"> Motor: <strong> {{$dato->motor}}</strong></p>
                                    <p class="mb-0"> Tracción: <strong>{{$dato->traccion}}</strong></p>
                                    <p class="mb-0"> Combustible: <strong>{{$dato->combustible}}</strong></p>
                                    <hr style="width: 230px;">
                                    <div class="d-flex align-items-center mb-0 ">
                                      <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="custom-btn-bo btn me-2" target="_blank"><font size="2" > Ver</font></a>
                                      <a href="https://wa.me/591{{$dato->comunicate}}?text=Hola%20vi%20este%20vehiculo%20{{$dato->titulo}}" class="custom-btn-w btn  me-2"><i class="bi-whatsapp" style="color: rgb(51, 189, 69);"></i></a>
                                      <a href="{{asset('public/images/'.explode("/", $dato->ficha)[2] )}}" class="custom-btn-d btn me-2"><i class="bi-download" style="color: rgb(75, 92, 170);"></i></a>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                @endforeach
              </div>
              <div class="mt-4">
                {{ $datos->links() }}
              </div>
            </div>

        </div>
    </div>    
</section>
@endsection

@section('js')
<script>
$('#limpiar').click(function (e) { 
  e.preventDefault();
  $('input[name="anio"]').prop('checked', false);
  $('input[name="marca"]').prop('checked', false);
  $('input[name="tipo"]').prop('checked', false);
  $('input[name="combustible"]').prop('checked', false);

});

function cargarInformacion(){
  var anio = $('input[name="anio"]:checked').val();
  var marca = $('input[name="marca"]:checked').val();
  var tipo = $('input[name="tipo"]:checked').val();
  var combustible = $('input[name="combustible"]:checked').val();
  const csrfToken = $('meta[name="csrf-token"]').attr('content');
  const datos = {
    _token: csrfToken,
    anio: "--",
    marca: "--",
    tipo: "--",
    combustible: "--",
  };    
  
  if(typeof anio !== 'undefined' && anio.length > 0 )
    datos.anio = anio;
  if( typeof marca !== 'undefined' && marca.length > 0 )
    datos.marca = marca;  
  if( typeof tipo !== 'undefined' && tipo.length > 0 )
    datos.tipo = tipo;  
  if( typeof combustible !== 'undefined' && combustible.length > 0 )
    datos.combustible = combustible;

  $.post('{{asset("index.php")}}/Tienda', datos, function(response) {
    var principal = '<div class="row">';
    for(var i=0; i<response.length; i++){
      principal = principal + '<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">';
      principal = principal + '<div class="custom-block-wrap">';
      principal = principal + "<a href=\"{{asset('index.php/Tienda/')}}/"+response[i].id+"\" class=\"d-block\" target=\"_blank\">";
      principal = principal + "<img src=\"{{asset('/')}}/"+response[i].foto1+"\" class=\"custom-block-image img-fluid\" >";
      principal = principal + "<div class=\"custom-block\"><div class=\"custom-block-body\">";
      principal = principal + "<h5 class=\"mb-3\">"+response[i].titulo+"</h5>";
      principal = principal + "<hr style=\"width: 230px;\">";
      principal = principal + "<p class=\"mb-0\"> Motor: <strong> "+response[i].motor+"</strong></p>";
      principal = principal + "<p class=\"mb-0\"> Tracción: <strong>"+response[i].traccion+"</strong></p>";
      principal = principal + "<p class=\"mb-0\"> Combustible: <strong>"+response[i].combustible+"</strong></p>";
      principal = principal + "<hr style=\"width: 230px;\">";
      principal = principal + "<div class=\"d-flex align-items-center mb-0 \">";
      principal = principal + "<a href=\"{{asset('index.php/Tienda/')}}/"+response[i].id+"\" class=\"custom-btn-bo btn me-2\"  target=\"_blank\"><font size=2> Ver</font></a>";
      principal = principal + "<a href=\"https://wa.me/591"+response[i].comunicate+"?text=Hola%20vi%20este%20vehiculo%20"+response[i].titulo+"\" class=\"custom-btn-w btn  me-2\"><i class=\"bi-whatsapp\" style=\"color: rgb(51, 189, 69);\"></i></a>";
      principal = principal + "<a href=\"{{asset('/')}}/"+response[i].ficha+"\" class=\"custom-btn-d btn me-2\"><i class=\"bi-download\" style=\"color: rgb(75, 92, 170);\"></i></a>";
      principal = principal + '</div></div></div></a></div></div>';
    }
    principal = principal + "</div>";
    $('#principal').html(principal);

  }, 'json').fail(function(xhr, status, error) {
    // Manejar errores
    console.error('Error:', error);
  });
}

$('input[name="anio"]').change(function() {
    cargarInformacion();
});

$('input[name="marca"]').change(function() {
    cargarInformacion();
});

$('input[name="tipo"]').change(function() {
    cargarInformacion();
});

$('input[name="combustible"]').change(function() {
    cargarInformacion();
});
</script>
@endsection
