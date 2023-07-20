@extends('veloci')

@section('producto')

    <!--<section class="section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                
                    <div class="card-header text-center">
                        <h3>Iniciar Sesi&oacute;n</h3>
                        <p style="font-size: 80px;"><i class="bi bi-person-circle"></i> </p> 
                    </div>
                    <div class="card">
                        <div class="card-body ">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-12">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Correo Electronico: </label>
    
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-12">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Contrase&ntilde;a</label>
    
                                <div class="col-md-12 mt-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            
    
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4 mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        Iniciar sesi&oacute;n
                                    </button>
    
                                    
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>-->
    <section class="section-padding section-bg">
  <div class="container ">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <p style="font-size: 60px;"><i class="bi bi-person-circle"></i> </p>
            <h3 class="mb-5">Inicio Sesión</h3>
             
            <form method="POST" action="{{ route('login') }}">
             @csrf
                <div class="form-outline mb-4">
                    <label for="email" class="typeEmailX-2">Nombre de usuario o correo electrónico</label> 
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                 <div class="form-outline mb-4">
                <label for="password" class="typeEmailX-2">Contraseña</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>


                <button class="btn btn-primary  btn-block" style="background-color: #3b5998;" type="submit">Acceder</button>
            </form>
            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
