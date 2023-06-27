@extends('veloci')

@section('producto')

<section class="section-padding">
    <div class="container">
        <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{asset('public/images/'.explode("/", $dato->foto1)[2] )}}" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark bi-chevron-left"></i>
                                <span class="visually-hidden">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('public/images/'.explode("/", $dato->foto1)[2] )}}" alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('public/images/'.explode("/", $dato->foto2)[2] )}}" alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('public/images/'.explode("/", $dato->foto3)[2] )}}" alt="Product Image 3">
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
                                                <img class="card-img img-fluid" src="{{asset('public/images/'.explode("/", $dato->foto4)[2] )}}" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('public/images/'.explode("/", $dato->foto5)[2] )}}" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('public/images/'.explode("/", $dato->foto6)[2] )}}" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

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
                <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                    <h5 class="mt-5 mb-3">{{$dato->titulo}}</h5>
                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <p class="mb-0">
                                    Estado:
                                    @if($dato->activo)
                                    <strong style="color:rgb(52, 190, 39);">Disponible</strong>
                                    @else
                                    ><strong style="color:rgb(199, 45, 45);">No Disponible</strong>
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
                                        <th>Wheels:</th> <td>{{$dato->wheels}}</td></tr>
                                    <tr>
                                        <th>Tracción:</th> <td>{{$dato->traccion}}</td></tr>
                                </tbody>
                            </table>
                    </div>
                    <div class="tags-block mt-5">
                        
                        <a href="{{asset('public/images/'.explode("/", $dato->ficha)[2] )}}" class=" tags-block-link " style="color: white;">
                            <i class=" bi-download"></i>  <span>Ficha Tecnica</span> 
                        </a>
                        <a href="https://wa.me/591{{$dato->comunicate}}?text=Hola%20estoy%20estoy%20interesado%20en%20{{$dato->titulo}}" class="tags-block-linkw" style="color: white;">
                            <i class=" bi-whatsapp"></i>  <span>Whatsapp</span>
                        </a>
                    </div>

                    <form class="custom-form contact-form mt-5" action="#" method="post" role="form">
                        <p class="mb-4"> <strong>Envia un mensaje para mas informacion:</strong>
                            
                        </p>
                        <input type="text" name="nombre" id="nombre"  class="form-control" placeholder="ejemplo:Luis" required>
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="ejemplo@gmail.com" required>
                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Mensaje" required></textarea>
                        <button type="submit" class="form-control">Enviar</button>
                    </form>
                </div>
        </div>
    </div>
</section>


<section class="contact-section section-padding" id="section_6">
    <div class="container">
        <div class="row">
            <h4 class="mb-lg-3">Autos Relacionados</h2>
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
                                    <tr><td>Motor :  </td><th colspan="3"> {{$dato->tipo}}</th></tr>
                                    <tr><td>Tracción : </td><th>{{$dato->traccion}}</th></tr>
                                    <tr><td>Comustible:  </td><th>{{$dato->combustible}}</th></tr>
                                </table>

                                <hr style="width: 230px;">
                                 <div class="d-flex align-items-center mb-0 ">
                                <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="custom-btn-bo btn me-1"><i class="bi-plus-lg"></i></a>
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