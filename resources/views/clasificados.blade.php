@extends('veloci')

@section('producto')
<main>
    <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-left mb-4">
                        <hr style="width:50px; height:2px; background:rgb(15, 38, 114)">
                        <h2>Clasificados</h2>
                        <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                             <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Requirimiento de Personal</h5>

                                    <p>Auto venta VELOCI requiere personal para los siguientes cargo:</p>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        AUXILIAR CONTABLE
                                    </li>

                                    
                                </div>

                                <a href="#" class="custom-btn btn"> <i class="bi-download me-2"></i>Convocatoria</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                             <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Requirimiento de Personal</h5>

                                    <p>Auto venta VELOCI requiere personal para los siguientes cargo:</p>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        CHAPISTA
                                    </li>

                                    
                                </div>

                                <a href="#" class="custom-btn btn"> <i class="bi-download me-2"></i>Convocatoria</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                             <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Requirimiento de Personal</h5>

                                    <p>Auto venta VELOCI requiere personal para los siguientes cargo:</p>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        AGENTE DE VENTAS
                                    </li>

                                    
                                </div>

                                <a href="#" class="custom-btn btn"> <i class="bi-download me-2"></i>Convocatoria</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2 class="mb-3">Informaciones</h2>
                                <div class="contact-info">

                                <p class="d-flex mb-2">
                                    <i class="bi-whatsapp me-2"></i>

                                    <a href="https://api.whatsapp.com/send?phone=59178718632&text=Hola%20mas%20informacion">
                                        +591 - 69612086 
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto:gerencia@veloci.com.bo">
                                        gerencia@veloci.com.bo
                                    </a>
                                </p>

                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Consultas</h2>

                            <p class="mb-4">Para mas informacion envinos un mensaje:
                            </p>
                            
                            <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Ejemplo:Luis" required>
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="luis@gmail.com" required>

                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="Mensaje"></textarea>

                            <button type="submit" class="form-control">Enviar</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection