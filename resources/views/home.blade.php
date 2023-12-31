@extends('veloci')

@section('producto')

<section>
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/images/GAZOO.jpg')}}" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/OCT001.jpg')}}" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/TACOMA23TRD.jpg')}}" class="d-block w-100" alt="">
                </div>
            </div>
            
        </div>
    </div>    
</section>

<section class="section-padding section-bg" >
    <div class="container">
       <div class="row">
            <div class="col-lg-12 col-12 text-center mb-4">
                <h2>Encuentra tu Vehículo </h2>
            </div>
            <div class="col-md-5 mx-auto ">
                <form action="{{route('vehiculo.buscar')}}" method="POST" class="mt-2">
                     <div class="input-group">
                         @csrf
                        <input class="form-control border-end-0 border rounded-pill me-1" type="search" placeholder="Buscar por marca,tipo de auto, etc." name="busqueda" id="example-search-input" >
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit">
                                <i class="bis bi-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
       </div>
        <div class="row">
            <div class="col-lg-12 col-12 text-left mb-4 mt-5">
                <h2 >Los Destacados</h2>
                <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
            </div>
        

            <div class="row">
            @foreach ($datos as $dato)
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-4">
                <div class="custom-block-wrap">
                    <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="d-block">
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
                            <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="custom-btn-bo btn me-2"><font size=2> Ver</font></a>
                            <a href="https://wa.me/591{{$dato->comunicate}}?text=Hola%20estoy%20interesado%20en%20{{$dato->titulo}}" class="custom-btn-w btn  me-2" target="_blank"><i class="bi-whatsapp" style="color: rgb(51, 189, 69);"></i></a>
                            <a href="{{asset('public/images/'.explode('/', $dato->ficha)[2] )}}" class="custom-btn-d btn me-2" target="_blank"><i class="bi-download" style="color: rgb(53, 62, 102);"></i></a>
                            </div>
                        </div>
                        
                        </div>
                    </a>
                </div>
            </div>
             @endforeach
            <div class="col text-end mt-5">
                <p class="text-center"><a class="custom-btn btn " href="{{asset('index.php/Tienda')}}"><i class="bi-chevron-right "> </i><span class="btn-text"> Catálogo</span></a></p>
            </div>
            </div>
        </div>
        
    
    </div>
</section>

<section class="news-section section-padding ">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 col-12 mb-4">
                <h2> Las Mejores Marcas </h2>
                <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
            </div>
        </div>    
        
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="row mt-5">

                    <div class="col-1 align-self-center" >
                        <a href="#multiMarcas" role="button" data-bs-slide="prev">
                            <i class="text-dark bi-chevron-left"></i>
                            <span class="visually-hidden">Previous</span>
                        </a>
                    </div>
                        
                    <div id="multiMarcas" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel"  >
                        <div class="carousel-inner product-links-wap" role="listbox"  >
                            <?php $contador = 0; $msj=" active"; ?>
                            @foreach($marcas as $marca)
                                @if( $contador == 0 )
                                    <div class="carousel-item{{$msj}}">
                                        <div class="row">
                                @endif
                                    <div class="col-3 p-md-5">
                                        <a href="{{asset('index.php/Tienda/'.$marca->marca.'/Marca')}}"><img class="img-fluid brand-img" src="{{asset($marca->imagen)}}" alt="{{$marca->marca}}"></a>
                                    </div>
                                <?php $contador ++ ; ?>  
                                @if( $contador == 4 )
                                        </div>
                                    </div>
                                    <?php $contador=0; $msj=""; ?>
                                @endif
                            @endforeach

                        </div>
                    </div>
                        
                    <div class="col-1 align-self-center" >
                        <a href="#multiMarcas" role="button" data-bs-slide="next" >
                            <i class="text-dark bi-chevron-right"></i>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
</section>





<section class="section-padding">
    <div class="container">
        <div class="col-lg-12 col-12 text-left mb-4">
            <h2 >Visita Nuestro Showroom</h2>
            <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
        </div>
        
        <div class="row "><!--------------------------------------------------------------------------------ACTUALIZACION DE UBICACION--------------------------------------------------------------------------------------------------->
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                    var setting = {"query":"Veloci, Avenida Cristo Redentor, Santa Cruz de la Sierra, Bolivia","width":1300,"height":600,"satellite":false,"zoom":17,"placeId":"ChIJxQ4n--7n8ZMRHF8cGqXnVTg","cid":"0x3855e7a51a1c5f1c","coords":[-17.7293141,-63.16689729999999],"lang":"es","queryString":"Veloci, Avenida Cristo Redentor, Santa Cruz de la Sierra, Bolivia","centerCoord":[-17.7293141,-63.16689729999999],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"944979"};
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=944979';
                    s.async = true;
                    s.onload = function (e) {
                      window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                  })();</script><a href="https://1map.com/es/map-embed">1 Map</a>
                  </div>            
        </div>
    </div>
</section>

<section class="news-section section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mb-4">
                <h2>Clientes Satisfechos</h2>
                <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
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
                                        <div class="col-6">
                                            <a href="#">
                                                <img src="{{asset('assets/images/llave.png')}}" class="custom-text-box-image img-fluid" alt="" width="100" height="40">
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#">
                                                <img src="{{asset('assets/images/llave.png')}}" class="custom-text-box-image img-fluid" alt="">
                                            </a>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#">
                                                <img src="{{asset('assets/images/llave.png')}}" class="custom-text-box-image img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#">
                                                <img src="{{asset('assets/images/llave.png')}}" class="custom-text-box-image img-fluid" alt="">
                                            </a>
                                        </div>
                                        
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
            </div>
        </div>
    </div>
</section>

<section class="section-padding  ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-left mb-4">
                <h2 class="animated bounce">Te ofrecemos </h2>
                <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
            </div>
            
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box  justify-content-center align-items-center ">
                            <img src="{{asset('assets/images/auto2.png')}}" alt=""  width="40" height="40">
                            <h5 class="mb-3">Selecciona el vehículo</h5>
                            <p>Tenemos muchos modelos y marcas disponibles.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box  justify-content-center align-items-center">
                            <img src="{{asset('assets/images/auto3.png ')}}" alt=""  width="40" height="40">
                            <h5 class="mb-3">Solicita una cotización</h5>
                            <p>Te ofrecemos diferentes tipos de precios.</p>
                        </div>
                    </div>
                </div>
                            
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box  justify-content-center align-items-center">
                        <img src=" {{asset('assets/images/moneysRecurso 7.png')}}"  alt=""  width="40" height="40">
                            <h5 class="mb-3 mt-3">Proceso de compra</h5>
                            <p>No necesitas grandes requisitos.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                         <div class="custom-text-box  justify-content-center">
                         <img src=" {{asset('assets/images/auto.png')}}" alt=""  width="50" height="50" >
                            <h5 class="mb-3">Paga y llévatelo</h5>
                            <p>Paga el monto y llévate el auto hasta tu casa.</p>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="col-lg-6 col-12 ">
                <div class="row">
                    <img src="{{asset('assets/images/llave.png')}}" class="custom-text-box-image img-fluid " alt="">
                </div>
                
            </div>
        </div>
    </div>
</section>
<section class="section-padding">
    <div class="container">
        <div class="row  ">
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <div class="counter-thumb text-center"> 
                            <span class="counter-number" data-from="1" data-to="{{$visitasN}}" data-speed="1000"></span>
                            <span class="text-gray counter-text">Visítas</span>
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <div class="counter-thumb text-center"> 
                            <span class="counter-number" data-from="1" data-to="{{$vehiculosN}}" data-speed="1000"></span>
                            <span class="text-gray counter-text">Vehiculos</span>
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 text-center">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <div class="counter-thumb text-center"> 
                            <span class="counter-number" data-from="1" data-to="{{$marcasN}}" data-speed="1000"></span>
                            <span class="text-gray counter-text">Marcas</span>
                        </div>
                    </div>
                
                </div>
            
            </div>
        </div>
    </div>
</section>


@endsection