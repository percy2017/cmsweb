@extends('voyager::master')

{{--  @section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))  --}}


@section('css')
@stop

@section('content')
    <div class="page-content container-fluid" id="voyagerBreadEditAdd">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary panel-bordered">
                    Detalles del Productos
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
@stop