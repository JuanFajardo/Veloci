@extends('veloci')

@section('producto')
<main>
    <section class="section-padding section-bg" >
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-left mb-4">
                        <h2>Trabaja con Nosotros</h2>
                        <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
                    </div>


                    @foreach($datos as $dato)
                    @if($dato->activo)
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">{{$dato->titulo}}</h5>
                                    <p>{{$dato->contenido}}</p>
                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        {{$dato->tipo}}
                                    </li>
                                </div>
                                
                                    <a href="{{asset(''.$dato->pdf)}}" class="custom-btn btn" target="_blank"> <i class="bi-download me-2"></i>Convocatoria</a>
                                
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
    </section>
</main>
@endsection