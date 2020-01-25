@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4>Registro en el Sitio Web</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            {{--  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>  --}}

                            {{--  <div class="col-md-6">  --}}
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre Completo" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                            {{--  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>  --}}

                            {{--  <div class="col-md-6">  --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electronico">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                            {{--  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>  --}}

                            {{--  <div class="col-md-6">  --}}
                                {{-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confimar Contraseña"> --}}
                            {{--  </div>  --}}
                        </div>
                        <div class="form-group">
                        
                            @captcha
                            <input type="text" class="form-control @error('captcha') is-invalid @enderror" id="captcha" name="captcha" autocomplete="off" placeholder="Ingresa el codigo de la imagen">
                            @error('captcha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group text-center">
                            {{--  <div class="col-md-6 offset-md-4">  --}}
                                <button type="submit" class="btn btn-primary">
                                    {{--  {{ __('Register') }}  --}}
                                    Enviar
                                </button>
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
