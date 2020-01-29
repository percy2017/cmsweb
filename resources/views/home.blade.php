@extends('layouts.app')
@section('css')
    <style>
        .form-elegant .font-small {
        font-size: 0.8rem; }

        .form-elegant .z-depth-1a {
        -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
        box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

        .form-elegant .z-depth-1-half,
        .form-elegant .btn:hover {
        -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
        box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center py-4">
        <div class="col-md-9">
            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Mi Perfil</h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group row">
                        <img src="{{ Voyager::Image(Auth::user()->avatar) }}" alt="..." class="img-thumbnail col-md-6">
                        <address for="rol" class="col-md-6 col-form-label text-md-left">
                            <p><strong>Nombre: </strong>{{ Auth::user()->name }}</p>
                            <p><strong>Rol: </strong>{{ Auth::user()->role->name }}</p>
                            <p><strong>Usuario: </strong>{{ Auth::user()->email }}</p>
                            <p><strong>Registro: </strong>{{ Auth::user()->created_at }}</p>
                            <hr />
                            @if(Auth::user()->role->id == 1)
                                <a class="btn btn-primary" href="{{ route('voyager.dashboard') }}">Ir a Panel</a>
                            @endif
                            <a class="btn btn-default" href="/">Volver</a>
                        </address>
                    </div>
                </div>
            </div> --}}

                <section class="form-elegant">

            <!--Form without header-->
            <div class="card">

                <div class="card-body mx-4">

                <!--Header-->
                <div class="text-center">
                    <h3 class="dark-grey-text mb-5"><strong>Mi Perfil</strong></h3>
                </div>
                <hr />
                
                <div class="form-group row">
                    <img src="{{ Voyager::Image(Auth::user()->avatar) }}" alt="..." class="img-thumbnail col-md-6">
                    <address for="rol" class="col-md-6 col-form-label text-md-left">
                        <p><strong>Nombre: </strong>{{ Auth::user()->name }}</p>
                        <p><strong>Rol: </strong>{{ Auth::user()->role->name }}</p>
                        <p><strong>Usuario: </strong>{{ Auth::user()->email }}</p>
                        <p><strong>Registro: </strong>{{ Auth::user()->created_at }}</p>
                        <hr />
                        @if(Auth::user()->role->id == 1)
                            <a class="btn btn-primary" href="{{ route('voyager.dashboard') }}">Ir a Panel</a>
                        @endif
                        <a class="btn" href="/">Volver al Home</a>
                    </address>
                </div>
               


            </div>
            <!--/Form without header-->

        </section>
        </div>

    

    </div>
</div>
@endsection
