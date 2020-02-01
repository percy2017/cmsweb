@extends('voyager::master')

{{--  @section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))  --}}

@section('css')

@endsection
@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
  
@endsection