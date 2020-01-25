@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                    {{--  <div class="row">  --}}
                        @foreach ($collection as $item)
                            <div class="col-sm-4 col-md-3">
                                <div class="thumbnail">
                                    <img src="{{ asset($item->image) }}" alt="..." class="img-responsive">
                                    <div class="caption">
                                        <h3>{{ $item->name }}</h3>
                                        <p>{{ $item->description }}</p>
                                        <p>
                                            @if (setting('site.template') == $item->name_short)
                                                <a href="#" class="btn btn-default" role="button">Ver Mas</a> 
                                                <a href="#" class="btn btn-default" role="button" disabled="disabled">Activar</a>
                                            @else
                                                <a href="#" class="btn btn-default" role="button">Ver Mas</a> 
                                                <a href="{{ route('template_change', $item->name_short) }}" class="btn btn-primary" role="button">Activar</a>
                                            @endif
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{--  </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop