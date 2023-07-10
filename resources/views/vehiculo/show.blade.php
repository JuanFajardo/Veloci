@extends('veloci')

@section('producto')

<section class="section-padding">
    <div class="container">
        <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{asset('/'. $dato->foto1)}}" alt="Card image cap" id="product-detail">
                    </div>
                    
                    
                    
                    <div class="row mt-5">
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark bi-chevron-left"></i>
                                <span class="visually-hidden">Previous</span>
                            </a>
                        </div>
                        
                        <br/>
                        <br/>

                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <div class="carousel-inner product-links-wap" role="listbox">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('/'.$dato->foto1 )}}" onclick='cargarImagen("{{$dato->foto1}}")'>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('/'.$dato->foto2 )}}" onclick='cargarImagen("{{$dato->foto2}}")'>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('/'.$dato->foto3 )}}" onclick='cargarImagen("{{$dato->foto3}}")'>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('/'.$dato->foto4 )}}" onclick='cargarImagen("{{$dato->foto4}}")'>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('/'.$dato->foto5 )}}" onclick='cargarImagen("{{$dato->foto5}}")'>
                                            </a>
                                        </div>
                                        
                                        @if( strlen($dato->foto6) > 10 )
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('/'.$dato->foto6 )}}" onclick='cargarImagen("{{$dato->foto6}}")'>
                                            </a>
                                        </div>
                                        @endif

                                    </div>
                                </div>

                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next" >
                                <i class="text-dark bi-chevron-right"></i>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <div class="col-lg-4 col-12 mx-auto ">
                    <h5 >{{$dato->titulo}}</h5>
                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <p class="mb-0">
                                    Estado:
                                    @if($dato->activo)
                                    <strong style="color:rgb(52, 190, 39);">Disponible</strong>
                                    @else
                                    <strong style="color:rgb(199, 45, 45);">No Disponible</strong>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="news-block news-block-two-col d-flex mt-4">
                            <table class="table" >
                                <tbody>
                                    <tr>
                                        <th>Tipo de vehículo:</th><td>{{$dato->tipo}}</td></tr>
                                    <tr>
                                        <th>Combustible:</th><td>{{$dato->combustible}}</td></tr>
                                    <tr>
                                        <th>Año:</th><td>{{$dato->anio}}</td></tr>
                                    <tr>
                                        <th>Color:</th><td>{{$dato->color}}</td></tr>
                                    <tr>
                                        <th>Color interior:</th> <td>{{$dato->color_interior}}</td></tr>
                                    <tr>
                                        <th>Neumáticos:</th> <td>{{$dato->wheels}}</td></tr>
                                    <tr>
                                        <th>Tracción:</th> <td>{{$dato->traccion}}</td></tr>
                                </tbody>
                            </table>
                    </div>
                    <div class="tags-block mt-5">
                        
                        <a href="{{asset('public/images/'.explode("/", $dato->ficha)[2] )}}" class=" tags-block-link " style="color: white;">
                            <i class=" bi-download"></i>  <span>Ficha Técnica</span> 
                        </a>
                        <a href="https://wa.me/591{{$dato->comunicate}}?text=Hola%20estoy%20estoy%20interesado%20en%20{{$dato->titulo}}" class="tags-block-linkw" style="color: white;">
                            <i class=" bi-whatsapp"></i>  <span>Whatsapp</span>
                        </a>
                    </div>

                    <form class="custom-form contact-form mt-3"  role="form">
                        @csrf
                        <p class="mb-1"> <strong>Enviar mensaje para más información:</strong>
                        </p>
                        <input type="hidden" name="titulo" id="titulo"  value="{{asset('/index.php/Tienda/'.$dato->id)}}" required>
                        <input type="text" name="nombre" id="nombre"  class="form-control" placeholder="ejemplo:Luis" required style="background-color:rgb(197, 197, 197);">
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="ejemplo@gmail.com" required  style="background-color:rgb(197, 197, 197);">
                        <textarea name="message" id="message" rows="3" class="form-control"  placeholder="Mensaje" required  style="background-color:rgb(197, 197, 197);"></textarea>
                        
                        <a href="#" id ="boton" class=" tags-block-link " style="color: white;">
                            <i class=" bi bi-send-fill"></i>  <span>Enviar Correo</span> 
                        </a>

                    </form>
                </div>
        </div>
        <div class="row mt-5">
            <div class="container">
                <h2>Autos Relacionados</h2>
                <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
            </div>
        
        
            @foreach ($datos as $dato)
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-5">
                <div class="custom-block-wrap">
                    <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="d-block">
                    <img src="{{asset('public/images/'.explode("/", $dato->foto1)[2] )}}" class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">{{$dato->titulo}}</h5>
                            <hr style="width: 230px;">

                            <table class="default" >
                                <tr><td>Motor:  </td><th colspan="3"> {{$dato->motor}}</th></tr>
                                <tr><td>Tracción: </td><th>{{$dato->traccion}}</th></tr>
                                <tr><td>Comustible:  </td><th>{{$dato->combustible}}</th></tr>
                            </table>

                            <hr style="width: 230px;">
                             <div class="d-flex align-items-center mb-0 ">
                            <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="custom-btn-bo btn me-1"><font size=2> Ver</font></a>
                            <a href="https://wa.me/591{{$dato->comunicate}}?text=Hola%20mas%20informacion%20de%20{{$dato->titulo}}" class="custom-btn-w btn me-1 "><i class="bi-whatsapp" style="color: rgb(51, 189, 69);"></i></a>
                            <a href="{{asset('public/images/'.explode('/', $dato->ficha)[2] )}}" class="custom-btn-d btn mb-0"><i class="bi-download" style="color: rgb(75, 92, 170);"></i></a>
                            </div> 
                        </div>
                        
                    </div>
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
   

</section>

@stop

@section('js')
<script>
    function cargarImagen(url) {
    var imagen = document.getElementById("product-detail");
    imagen.src = '{{asset("")}}/'+ url;
  }

  $('#boton').on( "click", function(event){

    event.preventDefault();

    if($('#nombre').val() != "" && $('#email').val()!="" && $('#message').val()!=""){
        var correoModal = document.getElementById('correoModal');
        correoModal.classList.add('show');
        $("#correoModal").modal('show');

        $("#boton").hide();
        const csrfToken = $('meta[name="csrf-token"]').attr('content');
        
        const formData = {
        _token: csrfToken,
        titulo: $('#titulo').val(),
        nombre: $('#nombre').val(),
        email: $('#email').val(),
        message: $('#message').val()
        };    
        const url = '{{asset("index.php/Correo")}}';
        
        $('#titulo').val("");
        $('#nombre').val("");
        $('#email').val("");
        $('#message').val("");

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'document',
            contentType: 'application/json',
            data: JSON.stringify(formData),
            success: function(response) {
                $('#titulo').val("");
                $('#nombre').val("");
                $('#email').val("");
                $('#message').val("");
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }
  });
</script>

@stop