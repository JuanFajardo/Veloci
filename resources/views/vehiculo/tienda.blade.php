@extends('veloci')

@section('producto')

<section class="section-padding section-bg" id="section_3">
    <div class="container">
        <div class="col-lg-12 col-12 text-left mb-4">
            <hr style="width:50px; height:2px; background:rgb(15, 38, 114)">
            @if( isset($busqueda) )
              <h2>{{$busqueda}}</h2>
            @else
              @if( strlen($sucess) > 2 )
                <h3>{!! $sucess !!}</h3>
              @else
                <h2>Inventario</h2>
              @endif
            @endif
            
            <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
        </div>
        <div class="row">
            <div class="col-lg-3 col-12 mb-4">
            <form action="{{ route('Vehiculo.filtro') }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body" >
            @csrf
                <div class="container mt-3">
                    <h4>Filtro</h4>
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header">
                          <p class=" dropdown-item btn" data-bs-toggle="collapse" href="#collapseOne"> Año</p>
                          <select name="anio" id="anio" class="form-select form-select-lg mb-3">
                              <option value="--"> </option>
                            @for($i=date('Y'); $i>=2019; $i--)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="card-header">
                          <p class="collapsed btn" data-bs-toggle="collapse">Marca</p>
                          
                          <select name="marca" id="marca" class="form-select form-select-lg mb-3">
                                <option value="--" > </option>
                                <option value="Land Rover">Land Rover</option> 
                                <option value="Jaguar">Jaguar</option> 
                                <option value="Mercedes Benz">Mercedes Benz</option> 
                                <option value="Cadillac">Cadillac</option> 
                                <option value="Audi">Audi</option> 
                                <option value="Dodge">Dodge</option> 
                                <option value="RAM">RAM</option> 
                                <option value="Jeep">Jeep</option> 
                                <option value="Bronco">Bronco</option> 
                                <option value="Toyota">Toyota</option> 
                                <option value="Volkswagen">Volkswagen</option> 
                                <option value="Volvo">Volvo</option> 
                                <option value="Nissan">Nissan</option> 
                                <option value="Hyundai">Hyundai</option> 
                                <option value="Mitsubishi">Mitsubishi</option>
                          </select>
                        </div>
                        
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <p class=" dropdown-item btn" data-bs-toggle="collapse" href="#collapseOne"> Tipo de Vehículo</p>
                          <select name="tipo" id="tipo" class="form-select form-select-lg mb-3">
                              <option value="--"> </option>
                              <option value="Camioneta">Camioneta</option>
                              <option value="Vagoneta">Vagoneta</option>
                              <option value="Semi-Nuevo">Semi-Nuevo</option>
                          </select>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <p class=" dropdown-item btn" data-bs-toggle="collapse" href="#collapseOne">Combustible</p>
                          <select name="combustible" id="combustible" class="form-select form-select-lg mb-3">
                              <option value="--"> </option>
                              <option value="Gasolina">Gasolina</option>
                              <option value="Diesel">Diesel</option>
                              <option value="Hibrido">Hibrido</option>
                              <option value="Electrico">Eléctrico</option>
                          </select>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header">
                          <input type="submit" class="form-control mt-1 btn btn-primary" name="boton" value="Filtrar" id="">
                        </div>
                      </div>

                        
                      
                    </div>
                  </div>
              </form>
            </div>
            
            <div class="col-lg-9 col-12 mb-4">
                <?php $contador=0; ?>
                @foreach ($datos as $dato)
                
                @if($contador == 0 )    
                <div class="row">
                @endif    

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="d-block">
                            <img src="{{asset('public/images/'.explode("/", $dato->foto1)[2] )}}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">{{$dato->titulo}}</h5>
                                    <hr style="width: 230px;">
                                    <p class="mb-0"> Motor <strong> {{$dato->motor}}</strong></p>
                                    <p class="mb-0"> Traccion <strong>{{$dato->traccion}}</strong></p>
                                    <p class="mb-0"> Combustible <strong>{{$dato->combustible}}</strong></p>
                                    <hr style="width: 230px;">
                                     <div class="d-flex align-items-center mb-0 ">
                                    
                                    <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="custom-btn btn me-2"><i class="bi-plus-lg"></i></a>
                                    <a href="https://wa.me/59178718632&text=Hola me comunico por el auto {{$dato->titulo}}" class="custom-btn btn  me-2"><i class="bi-whatsapp"></i></a>
                                    <a href="{{asset('public/images/'.explode("/", $dato->ficha)[2] )}}" class="custom-btn btn me-2"><i class="bi-download"></i></a>

                                    </div>
                                </div>
                                
                            </div>
                            </a>
                        </div>
                    </div>
                    
                
                @if( $contador == 2 )    
                </div><br/>
                <?php  $contador = 0; ?>
                @else
                <?php $contador++; ?>
                @endif    
                
                @endforeach

                <div class="mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link active" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          {{ $datos->links() }}
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
    
    
</section>



    
    

    
@endsection