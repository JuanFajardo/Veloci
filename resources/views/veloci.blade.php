<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pagina de Veloci.com.bo">
        <meta name="author" content="Elena Taboada, Juan Fajardo">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/rueda.png')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/templatemo-kind-heart-charity.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/dataTables.bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/jquery.dataTables.min.css')}}" rel="stylesheet">
        <style>
            .whatsapp-float {
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 60px;
            height: 60px;
            font-size: 40px;
            border-radius: 70%;
            text-align: center;
            line-height: 60px;
            z-index: 999;
            text-decoration: none;
            transition: opacity 0.3s ease;
            }
            .whatsapp-float:hover {
                width: 80px;
                height: 80px;
            }
            .facebook-float {
            position: fixed;
            bottom: 150px;
            left: 20px;
            width: 30px;
            height: 30px;
            font-size: 40px;
            border-radius: 70%;
            text-align: center;
            line-height: 60px;
            z-index: 999;
            text-decoration: none;
            transition: opacity 0.3s ease;
            }
            .facebook-float:hover {
                width: 80px;
                height: 80px;
            }
            .twitter-float {
            position: fixed;
            bottom: 190px;
            left: 20px;
            width: 30px;
            height: 30px;
            font-size: 40px;
            border-radius: 70%;
            text-align: center;
            line-height: 60px;
            z-index: 999;
            text-decoration: none;
            transition: opacity 0.3s ease;
            }
            .twitter-float:hover {
                width: 80px;
                height: 80px;
            }
            .instagram-float {
            position: fixed;
            bottom: 230px;
            left: 20px;
            width: 30px;
            height: 30px;
            font-size: 40px;
            border-radius: 70%;
            text-align: center;
            line-height: 60px;
            z-index: 999;
            text-decoration: none;
            transition: opacity 0.3s ease;
            }
            .instagram-float:hover {
                width: 80px;
                height: 80px;
            }
            .youtube-float {
            position: fixed;
            bottom: 270px;
            left: 20px;
            width: 30px;
            height: 30px;
            font-size: 40px;
            border-radius: 70%;
            text-align: center;
            line-height: 60px;
            z-index: 999;
            text-decoration: none;
            transition: opacity 0.3s ease;
            }
            .youtube-float:hover {
                width: 80px;
                height: 80px;
            }
            .tiktok-float {
            position: fixed;
            bottom: 310px;
            left: 20px;
            width: 30px;
            height: 30px;
            font-size: 40px;
            border-radius: 70%;
            text-align: center;
            line-height: 60px;
            z-index: 999;
            text-decoration: none;
            transition: opacity 0.3s ease;
            }
            .tiktok-float:hover {
                width: 80px;
                height: 80px;
            }
            .linkedin-float {
            position: fixed;
            bottom: 350px;
            left: 20px;
            width: 30px;
            height: 30px;
            font-size: 40px;
            border-radius: 70%;
            text-align: center;
            line-height: 60px;
            z-index: 999;
            text-decoration: none;
            transition: opacity 0.3s ease;
            }
            .linkedin-float:hover {
                width: 80px;
                height: 80px;
            }
            
        </style>
    </head>
    <body id="section_1">
        <header class="site-header d-lg-block d-none">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-6 d-flex">
                        <p class="d-flex me-4 mb-0">
                            <!--<i class="bi-whatsapp me-2"></i>
                            <a href="https://wa.me/59169612086?text=Hola%20quiero%20saber%20mas%20de%20Veloci%20">
                                +591 - 69612086 
                            </a>-->
                        </p>

                        <!--<p class="d-flex mb-0">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto: ventas@veloci.com.bo">
                                ventas@veloci.com.bo
                            </a>
                        </p>-->
                    </div>

                    <div class="col-lg-6 col-12 ms-auto d-flex">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-whatsapp me-2" style="color: rgb(34, 215, 58);"></i>
                            <a href="https://wa.me/59169612086?text=Hola%20quiero%20saber%20mas%20de%20Veloci%20">
                                +591 - 69612086 
                            </a>
                        </p>
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-whatsapp me-2" style="color: rgb(34, 215, 58);"></i>
                            <a href="https://wa.me/59177047837?text=Hola%20quiero%20saber%20mas%20de%20Veloci%20">
                                +591 - 77047837
                            </a>
                        </p>
                       
                       

                        <!--<ul class="social-icon">
                            
                            <li class="social-icon-item">
                                <a href="https://www.facebook.com/VelociAutoventa/" class="social-icon-link bi-facebook"></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="https://twitter.com/AutoventaVeloci/" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/veloci.autoventas/" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/@velociautoventabo/" class="social-icon-link bi-youtube"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.tiktok.com/@veloci.autoventas/" class="social-icon-link bi-tiktok"></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="https://www.linkedin.com/company/velociautoventa/" class="social-icon-link bi-linkedin"></a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
            
        </header>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="{{asset('index.php')}}">
                    <img src="{{asset('assets/images/logveloci 1.png')}}" class="logo img-fluid" alt="Kind Heart Charity">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link smoothscroll" href="{{asset('index.php')}}">Inicio</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Inventario</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{asset('index.php/Tienda')}}">Inventario</a></li>
                                <li><a class="dropdown-item" href="{{asset('index.php/Inventario/Camioneta')}}">Camionetas</a></li>
                                <li><a class="dropdown-item" href="{{asset('index.php/Inventario/Vagoneta')}}">Vagonetas</a></li>
                                <li><a class="dropdown-item" href="{{asset('index.php/Inventario/Electrica')}}">Electrica</a></li>
                                <li><a class="dropdown-item" href="{{asset('index.php/Inventario/Hibrido')}}">Híbridos</a></li>
                                <li><a class="dropdown-item" href="{{asset('index.php/Inventario/Seminuevo')}}">Semi-Nuevos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sobre Nosotros</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{asset('index.php/Pagina/quienes')}}">¿Quienes Somo?</a></li>
                                <li><a class="dropdown-item" href="{{asset('index.php/Clasificados')}}">Trabaja con Nosotros</a></li>
                                
                                @if( auth()->check() )
                                    <li><a class="dropdown-item" href="{{asset('index.php/Vehiculo')}}">Adm. Vehículos</a></li>
                                    <li><a class="dropdown-item" href="{{asset('index.php/Trabajo')}}">Adm. Trabajos</a></li>
                                    <li><a class="dropdown-item" href="{{asset('index.php/Visita')}}">Reportes</a></li>
                                @endif

                            </ul>
                        </li>
                        <li class="nav-item ms-3">
                            
                        </li>
                    </ul>
                </div>
                <!--<div class="row ">
                    <div class="me-4  ms-auto d-flex ">
                        <ul class="social-icon ">
                            
                            <li class="social-icon-item me-2">
                                <a href="https://www.facebook.com/VelociAutoventa/" >
                                    <img  src="{{asset('assets/images/logo-face.png')}}" alt="" width="20" height="20" title="Facebook">
                                    
                                </a>
                            </li>
                           <li class="social-icon-item me-2">
                                <a href="https://twitter.com/AutoventaVeloci/" >
                                    <img  src="{{asset('assets/images/x.tik.png')}}" alt="" width="20" height="20" title="X">
                                </a>
                            </li>
    
                           <li class="social-icon-item me-2">
                                <a href="https://www.instagram.com/veloci.autoventas/"  >
                                    <img src="{{asset('assets/images/logo.ins.png')}}" alt="" width="20" height="20" title="Instagram">
                                </a>
                            </li>
    
                            <li class="social-icon-item me-2">
                                <a href="https://youtube.com/@velociautoventabo/" >
                                    <img  src="{{asset('assets/images/logo-y.png')}}" alt="" width="20" height="20" title="Youtube">
                                </a>
     
                            <li class="social-icon-item me-2">
                                <a href="https://www.tiktok.com/@veloci.autoventas/" >
                                    <img  src="{{asset('assets/images/logo.tik.png')}}" alt="" width="20" height="20" title="Tiktok">
                                </a>
                            </li>
                            <li class="social-icon-item me-2">
                                <a href="https://www.linkedin.com/company/velociautoventa/" >
                                    <img  src="{{asset('assets/images/logo-i.png')}}" alt="" width="20" height="20" title="Linkedin">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>--->
            </div>
        </nav>

        <main>
            @yield('producto')
            <p class="social-icon-item">
                <a href="https://wa.me/59169612086"  target="_blank">
                    <img class="whatsapp-float" src="{{asset('assets/images/logo.png')}}" alt="">
                </a>
            </p>
            <div class="d-none d-sm-none d-md-block">
                <p class="social-icon-item ">
                <a href="https://www.linkedin.com/company/velociautoventa/"  target="_blank">
                    <img class="facebook-float" src="{{asset('assets/images/logo-i.png')}}" alt="">
                </a>
            </p>
            <p class="social-icon-item">
                <a href="https://www.tiktok.com/@veloci.autoventas/"  target="_blank">
                    <img class="twitter-float" src="{{asset('assets/images/logo.tik.png')}}" alt="">
                </a>
            </p>
            <p class="social-icon-item">
                <a href="https://youtube.com/@velociautoventabo/"  target="_blank">
                    <img class="instagram-float" src="{{asset('assets/images/logo-y.png')}}" alt="">
                </a>
            </p>
            <p class="social-icon-item">
                <a href="https://www.instagram.com/veloci.autoventas/"  target="_blank">
                    <img class="youtube-float" src="{{asset('assets/images/logo.ins.png')}}" alt="">
                </a>
            </p>
            <p class="social-icon-item">
                <a href="https://twitter.com/AutoventaVeloci/"  target="_blank">
                    <img class="tiktok-float" src="{{asset('assets/images/x.tik.png')}}" alt="">
                </a>
            </p>
            <p class="social-icon-item">
                <a href="https://www.facebook.com/VelociAutoventa/"  target="_blank">
                    <img class="linkedin-float" src="{{asset('assets/images/logo-face.png')}}" alt="">
                </a>
            </p>
            </div>
            <div class="modal fade" id="correoModal" tabindex="-1" aria-labelledby="correoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Su correo ha sido enviado exitosamente, nos contactaremos con usted lo más antes posible.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </main>


        
        

        <footer class="site-footer"> 
            <div class="container">
                <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                        
                        <h6 class="mb-3">Acerca de</h6>
                        <hr style="width:230px; height:2px; background:rgb(172, 172, 172)">
                        <p  class="text-white  texto-justificado mt-3" >
                            El sitio donde podrá encontrar 
                            <br>los mejore catálogo de coches.
                        </p>
                        
                        <img  src="{{asset('assets/images/logveloci blanco.png')}}" class="logo img-fluid" alt="">
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <h6 class=" mb-3">Horarios de  Atención</h6>
                        <hr style="width:230px; height:2px; background:rgb(172, 172, 172)">
                        <p class="text-white d-flex mt-3">
                            <i class="bi-clock-fill me-2" ></i>
                                Lunes - Sábado
                        </p>
                        <p class="text-white d-flex mt-3">
                            <i class="bi-minus me-2" ></i>
                                Mañanas: 8:00 - 12:00<br>
                                Tardes: 14:00 - 18:00
                        </p>
                        <ul class="social-icon">
                             

                            <li class="social-icon-item">
                                <a href="https://www.facebook.com/VelociAutoventa/" class="social-icon-link bi-facebook"></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="https://twitter.com/AutoventaVeloci/" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/veloci.autoventas/" class="social-icon-link bi-instagram"></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="https://youtube.com/@velociautoventabo/" class="social-icon-link bi-youtube"></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="https://www.tiktok.com/@veloci.autoventas/" class="social-icon-link bi-tiktok"></a>
                            </li>
                                
                            <li class="social-icon-item">
                                <a href="https://www.linkedin.com/company/velociautoventa/" class="social-icon-link bi-linkedin"></a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <h6 class=" mb-3" >Contactos</h6>
                        <hr style="width:230px; height:2px; background:rgb(172, 172, 172)">

                        <p class="text-white d-flex mb-2">
                            <i class="bi-whatsapp me-2" ></i>
                            <a href="https://wa.me/59169612086?text=Hola%20quiero%20saber%20mas%20de%20Veloci%20" class="site-footer-link">
                                +591 - 69612086 
                            </a>
                        <a class="me-5"></a>  
                           <i class="bi-whatsapp me-2" ></i>
                            <a href="https://wa.me/59177047837?text=Hola%20quiero%20saber%20mas%20de%20Veloci%20" class="site-footer-link">
                                +591 - 77047837
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:ventas@veloci.com.bo" class="site-footer-link">
                                <font size=2> ventas@veloci.com.bo</font> 
                            </a>
                        </p>

                        <p class="text-white d-flex mt-3 texto-justificado ">
                            <i class="bi-geo-alt me-2" ></i>
                            <font size=2>Santa Cruz Avenida Cristo Redentor entre sexto y <br>septimo anillo (alado de Supermercado Hipermaxi)</font>
                        </p>
                       
                    </div>
                    
                    
                </div>
                
            </div>

        </footer>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('assets/js/click-scroll.js')}}"></script>
        <script src="{{asset('assets/js/counter.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        @yield('js')
    </body>
</html>