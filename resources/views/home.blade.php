@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mi Perfil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group row">
                        <img src="{{ Voyager::Image(Auth::user()->avatar) }}" alt="..." class="img-thumbnail col-md-6">

                        <address for="rol" class="col-md-6 col-form-label text-md-left">
                            <p><strong>Usuario: </strong>{{ Auth::user()->name }}</p>
                            <p><strong>Rol: </strong>{{ Auth::user()->role->name }}</p>
                            <p><strong>Usuario: </strong>{{ Auth::user()->email }}</p>
                            <p><strong>Registro: </strong>{{ Auth::user()->created_at }}</p>
                            <hr />
                            @if(Auth::user()->role->id == 1)
                                <a class="btn btn-primary">Ir a Panel</a>
                            @endif
                            
                        </address>
                        
                        
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
