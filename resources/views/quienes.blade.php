@extends('veloci')

@section('producto')
<main>
    <section class="section-padding section-bg" >
        <div class="container">
            <div class="col-lg-12 col-12 text-left mb-4">
                <h2>¿Quienes Somos?</h2>
                <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
            </div>
            <div class="row mt-5">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="{{asset('assets/images/cl 4.jpg')}}" class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12 mb-lg-0">
                    <div class="custom-text-box texto-justificado">
                        <h2 class="mb-2">Historia</h2>
                        <hr style="width: 230px;">
                        <font  size=3>La idea de un nuevo emprendimiento, más específicamente de un Auto venta surge a la raíz de experiencias que nos demostraban que en Bolivia no había un lugar que concentre varias marcas de movilidades, estas experiencias nos hicieron madurar la idea de crear a <strong>VELOCI</strong> quien sería un referente de concentración en un solo lugar de variedad de marcas, modelos y colores de automóviles de alta gama, de igual manera le ofrecemos la opción de elegir entre autos con combustible convencional, hibrido o eléctrico, facilitando de esta manera a nuestros clientes el afán de cruzar las ciudades en busca de autos soñados.
                            <br><br><strong>VELOCI</strong> en sus instalaciones posee esta característica que nos distingue de las demás, contando con un variado stock de unidades motorizadas, misma que cuentan con la respectiva garantía, calidad y asesoramiento personalizado, para que nuestros clientes sientan la seguridad y seriedad de su inversión.<br><br>
                            El auto soñado, el compañero de aventura, la unidad que transporta a la familia, el amigo de todos de los días búsquelo en <strong>AUTOVENTA VELOCI</strong> .
                        </font>
                    </div>
                </div>

            </div>
            <div class="row mt-5">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="custom-text-box texto-justificado">
                        <h2 class="mb-2">Misión</h2>
                        <hr style="width: 230px;">
                        <font  size=3>Poner a disposición de nuestros clientes una amplia gama de movilidades según sus gustos, criterios y/o necesidades además de ofrecer garantías y asesoramiento personalizado en la adquisición de su compañero de aventura.</font>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="{{asset('assets/images/cl 1.jpg')}}" class="custom-text-box-image img-fluid" alt="">
                </div>

            </div>
            <div class="row mt-5">
                
                

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="custom-text-box texto-justificado">
                        <h2 class="mb-2">Visión</h2>
                        <hr style="width: 230px;">
                        <font size=3>Queremos ser referente a nivel nacional de ofrecer a nuestra población variedad de un solo lugar, en donde el cliente podrá tener de elegir el que más le guste (marca, modelo color y/o combustible a usar) si la limitación que se tropieza en otros lugares, con entrega en cualquier punto del país, pero sobre todo con garantía y seriedad que protege su inversión.</font>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="{{asset('assets/images/cl 2.jpg')}}" class="custom-text-box-image img-fluid" alt="">
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


@endsection