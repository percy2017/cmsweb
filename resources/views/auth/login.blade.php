@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4>Ingreso al Sitio Web</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{--  <h5>Login con Facebbok</h5>  --}}
                        <div class="form-group">
                            <a class="btn btn-primary btn-block" href="{{ route('password.request') }}">
                               Login con <i class="fab fa-facebook-f fa-lg white-text"> </i> acebook
                            </a>
                        </div>
                        <hr />
                        
                        <div class="form-group">
                            {{--  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>  --}}

                            {{--  <div class="col-xs-12">  --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Usuario" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                            {{--  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>  --}}

                            {{--  <div class="col-md-6">  --}}
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                            {{--  <div class="col-md-6 offset-md-4">  --}}
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recuerdame
                                    </label>
                                </div>
                            {{--  </div>  --}}
                        </div>

                        

                        <div class="form-group">
                            {{--  <div class="col-md-8 offset-md-4">  --}}
                                <button type="submit" class="btn btn-primary">
                                    {{-- {{ __('Login') }} --}}
                                    Ingresar al sistema
                                </button>

                            {{--  </div>  --}}
                        </div>

                        <hr />

                        <div class="form-group text-center">
                            {{--  <div class="col-md-8 offset-md-4">  --}}

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{--  {{ __('Forgot Your Password?') }}  --}}
                                        Olvidaste tu contraseña ?
                                    </a>
                                @endif
                            {{--  </div>  --}}
                        </div>
                        <hr />
                        <div class="form-group text-center">
                            <a class="btn btn-primary" href="/">
                                Volver al Home
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
