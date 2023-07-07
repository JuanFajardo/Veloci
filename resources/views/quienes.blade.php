@extends('veloci')

@section('producto')
<main>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="col-lg-12 col-12 text-left mb-4">
                <h2>¿Quienes Somos?</h2>
                <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
            </div>
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="{{asset('assets/images/historiaveloci2.jpg')}}" class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12 mb-lg-0">
                    <div class="custom-text-box texto-justificado">
                        <h2 class="mb-2">Historia</h2>
                        <hr style="width: 230px;">
                        <font  size=3>El sueño de tener una auto venta se hizo realidad, la pasión por el mundo de los vehículos y ofrecer a nuestros clientes una experiencia diferente, basada en la confianza, la calidad y el servicio. Sabemos que el mercado de los autos es competitivo y que teníamos que diferenciarnos de la competencia. Por eso, creamos una marca nueva, que refleja nuestra visión y valores. Así nació Veloci Auto venta, una empresa que se especializa en la venta de autos nuevos y seminuevos, con garantía y asesoramiento personalizado.

                            Renovamos un espacio para la comodidad de nuestros clientes, para ofrecer una variedad de modelos y marcas de autos, adaptados a las necesidades y preferencias de cada comprador estamos asociados con proveedores internacionales.
                            
                            En poco tiempo, Veloci Auto Venta se ha convertido en un referente en el sector de la venta de autos de Bolivia. Logrando fidelizar a cliente con un trato cercano y honesto, comprometidos con la calidad y la satisfacción. Nos sentimos orgullosos de haber cumplido un sueño de emprendimiento y de haber contribuido al desarrollo económico y social de nuestro país.</font>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="custom-text-box texto-justificado">
                        <h2 class="mb-2">Misión</h2>
                        <hr style="width: 230px;">
                        <font  size=3>En Veloci Autoventa buscamos  satisfacer las necesidades de nuestros  clientes, ofreciéndoles una amplia gama de vehículos revisados y garantizados, así como un asesoramiento personalizado de calidad con rapidez y confianza.</font>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="{{asset('assets/images/nissan qashqai cliente satisfecho20220603.jpg')}}" class="custom-text-box-image img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="{{asset('assets/images/toyota land cruiser 79 2022.jpg')}}" class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="custom-text-box texto-justificado">
                        <h2 class="mb-2">Visión</h2>
                        <hr style="width: 230px;">
                        <font size=3>Ser líder del mercado nacional de las autoventas de lujo y ser  sello de garantía, calidad y genérese confianza en sus potenciales consumidores como clientes habituales.</font>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="testimonial-section section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Valores</h2>

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="" class="d-block">
                            <img src="{{asset('assets/images/icons/benefit.png')}}" class="featured-block-image img-fluid" alt="">

                            <strong>Honestidad e Integridad</strong>
                            <p>Cumpliremos con nuestro código de ética en todas nuestras relaciones con nuestros clientes y entre nosotros. Seremos honestos y veraces en todos nuestros tratos en todo momento.</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="" class="d-block">
                            <img src="{{asset('assets/images/icons/creative.png')}}" class="featured-block-image img-fluid" alt="">

                            <strong>Innovación</strong>
                            <p>La mejora de la experiencia del cliente, la optimización de los canales de distribución.</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="" class="d-block">
                            <img src="{{asset('assets/images/icons/public-servicez.png')}}" class="featured-block-image img-fluid" alt="">

                            <strong>Equidad</strong>
                            <p>Trataremos a los clientes y al personal en todo momento de manera justa y equitativa.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
</section>

@endsection