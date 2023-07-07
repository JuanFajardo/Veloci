@extends('veloci')

@section('producto')
<section class="hero-section hero-section-full-height">
    
    <div class="container-fluid">
        
        <div class="row ">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/images/portadas medida fb.jpg')}}" class="carousel-image img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/images/pt 1 4xe.jpg')}}" class="carousel-image img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/images/pt2.jpg')}}" class="carousel-image img-fluid" alt="...">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="section-padding section-bg" id="section_3">
    <div class="container">
        <div class=" row  ">
            <div class="col-lg-12 col-12 text-center mb-4">
                            
                <h2>Encentra tu Vehículo </h2>
            </div>
            <div class="row">
                <div class="col-md-5 mx-auto ">
                    <div class="small fw-light animated animate__rotateOut ">Buscar por marca,tipo de auto, etc.</div>
                        <form action="{{route('vehiculo.buscar')}}" method="POST" class="mt-2">
                            <div class="input-group">
                                @csrf
                                <input class="form-control border-end-0 border rounded-pill me-1" type="search" placeholder="Aqui.." name="busqueda" id="example-search-input" >
                                <span class="input-group-append">
                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit">
                                    <i class="bis bi-search"></i>
                                </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

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
                            <a href="https://wa.me/59178718632&text=Hola me comunico por el auto {{$dato->titulo}}" class="custom-btn-w btn  me-2"><i class="bi-whatsapp" style="color: rgb(51, 189, 69);"></i></a>
                            <a href="{{asset('public/images/'.explode('/', $dato->ficha)[2] )}}" class="custom-btn-d btn me-2"><i class="bi-download" style="color: rgb(53, 62, 102);"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    </a>
                </div>
            </div>
        @endforeach
        </div><br/>
    </div>
    <div class="row">
        <div class="col text-end mt-5">
            <p class="text-center"><a class="custom-btn btn " href="{{asset('index.php/Tienda')}}"><i class="bi-chevron-right "> </i><span class="btn-text"> Catálogo</span></a></p>
    </div>
    </div>
    
</section>
<section class="about-section section-padding">
    <div class="container">
        <div class="col-lg-12 col-12 text-left mb-4">
            
            <h2 >Las Mejores Marcas</h2>
            <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
        </div>
        <div class="row">
            
            <div class="col">
                <div class="carousel slide carousel-multi-item pt-2 pt-md-0">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="row">
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Land Rover/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/landrover web.png')}}" alt="Land Rover"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Jaguar/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/jaguarweb.png')}}" alt="Jaguar"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Mercedes Benz/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/mercedes benz web.png')}}" alt="Mercedes Benz"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Cadillac/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/cadillac web.png')}}" alt="Cadillac"></a>
                                </div>

                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row">
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Audi/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/audi web.png')}}" alt="Audi"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Dodge/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/dodgeweb (1).png')}}" alt="Dodge"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/RAM/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/ramweb.png')}}" alt="RAM"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Jeep/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/jeep web.png')}}" alt="Jeep"></a>

                                </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row">
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Bronco/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/broncoweb.png')}}" alt="Bronco"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Toyota/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/volkswagenweb.png')}}" alt="Toyota"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Volkswagen/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/toyota web.png')}}" alt="Volkswagen"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Volvo/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/volvoweb.png')}}" alt="Volvo"></a>
                                </div>
                            </div>
                          </div>
                          <option value="Nissan"></option> 
                          <div class="carousel-item">
                            <div class="row">
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Nissan/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/nissanweb.png')}}" alt="Nissan"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Hyundai/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/hyundaiweb.png')}}" alt="Hyundai"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="{{asset('index.php/Tienda/Mitsubishi/Marca')}}"><img class="img-fluid brand-img" src="{{asset('assets/images/icons/mitsubichi web.png')}}" alt="Mitsubishi"></a>
                                </div>
                                
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Siguiente</span>
                        </button>
                      </div>
                </div>
                
            </div>
            
            
        </div>
    </div>
</section>

<section class="section-padding section-bg">
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
                  })();</script><a href="https://1map.com/es/map-embed">1 Map</a></div>            
        </div>
    </div>
</section>
<section class="section-padding ">
                <div class="container">
                    <div class="col-lg-12 col-12 text-left mb-4">
                        <h2 class="animated bounce">Te Ofrecemos </h2>
                        <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
                    </div>
                    <p>La mejor atención y la compra con solo algunos pasos.</p>
                    <div class="row">
                        <div class=" col-lg-6">
                            <div class="row">

                                <div class="col-lg-6 ">
                                    
                                    <div class="card" style="width: 16rem;">
                                        <div class="card-body">
                                        <img src="{{asset('assets/images/auto2.png')}}" alt=""  width="40" height="40">
                                        <h5 class="card-title ">Selcción el vehículo </h5>
                                            <p >Tenemos muchos modelos y marcas disponibles.</p>
                                          
                                        </div>
                                     </div>
                                </div>
                                <div class="col-lg-6 mt-5 ">
                                    
                                    <div class="card" style="width: 16rem;">
                                        <div class="card-body">
                                        <img src="{{asset('assets/images/auto3.png ')}}" alt=""  width="40" height="40">
                                        <h5 class="card-title">Solicita una cotización </h5>
                                        <p >Te ofrecemos diferentes tipos de precios.</p>
                                          
                                        </div>
                                     </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-6 ">
                                    
                                    <div class="card" style="width: 16rem;">
                                        <div class="card-body aling-center">
                                        <img src=" {{asset('assets/images/moneysRecurso 7.png')}}" alt=""  width="40" height="40">
                                        <h5 class="card-title">Proceso de compra sencilla</h5>
                                        <p >No necesitas grandes requisitos.</p>
                                          
                                        </div>
                                     </div>

                                </div>
                                <div class="col-lg-6 mt-5  ">
                                    <div class="card" style="width: 16rem;">
                                        <div class="card-body">
                                        <img src=" {{asset('assets/images/auto.png')}}" alt=""  width="50" height="50">
                                        <h5 class="card-title">Paga y llévatelo</h5>
                                        <p >Paga el monto y llévate el auto hasta tu casa.</p>
                                          
                                        </div>
                                      </div>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                        <div class="col-lg-6 ">
                            <div class="news-block">
                                <div class="news-block">
                                    <img src="{{asset('assets/images/llave.png')}}" class="news-image img-fluid" alt="" >
    
                                   
                                </div>
                                
    
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
            </section>

@endsection