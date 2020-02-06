@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))
@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ $dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('css')
@stop

@section('content')
    <div class="container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <form action="{{ route('excels_import') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-12">
                                <label>Tablas:</label>
                                <select name="tables" class="select2">
                                    @foreach($tables as $table)
                                        @continue(in_array($table->name, config('voyager.database.tables.hidden', [])))                                 
                                        <option value="{{ $table->name }}">{{ $table->name }}</option>                                    
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nombre:</label>
                                <input class="form-control" name="name" type="text" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Excel:</label>
                                <input class="form-control" name="file_excel" type="file" />
                            </div>
                            
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </form>
                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
@stop