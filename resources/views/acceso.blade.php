@extends('template.mastertemplate0')
@section('contenido_central')
<div class="container-login100" style="background:linear-gradient(50deg, olive, burlywood, moccasin, peru, olive);">
    <div class="wrap-login100">
      <!--form class="login100-form" action="principal_admin"-->              
      <form method="POST" action="{{ route('login') }}" class="login100-form">
      @csrf
        <span class="login100-form-title p-b-34">Iniciar Sesión</span>             
        <div class="wrap-input100 rs1-wrap-input100 form-group">          
          <input id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Username">
          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif                            
        </div>  

        <div class="wrap-input100 rs2-wrap-input100 form-group">
          <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña">
          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div> 

        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

        <input type="submit" id="btnSubmit" value="Acceder" class="login100-form-btn">       
      </form>      
      <div class="login100-more" style="background-image: url('imag/logo2.png');"></div>
    </div>
  </div> 
@endsection()
