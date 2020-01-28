@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
        </h1>
        {{--  @can('add', app($dataType->model_name))
            <a href="{{ route('voyager.'.$dataType->slug.'.create') }}" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>{{ __('voyager::generic.add_new') }}</span>
            </a>
        @endcan  --}}
        {{--  @can('delete', app($dataType->model_name))
            @include('voyager::partials.bulk-delete')
        @endcan
        @can('edit', app($dataType->model_name))
            @if(isset($dataType->order_column) && isset($dataType->order_display_column))
                <a href="{{ route('voyager.'.$dataType->slug.'.order') }}" class="btn btn-primary btn-add-new">
                    <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
                </a>
            @endif
        @endcan  --}}
        {{--  @can('delete', app($dataType->model_name))
            @if($usesSoftDeletes)
                <input type="checkbox" @if ($showSoftDeleted) checked @endif id="show_soft_deletes" data-toggle="toggle" data-on="{{ __('voyager::bread.soft_deletes_off') }}" data-off="{{ __('voyager::bread.soft_deletes_on') }}">
            @endif
        @endcan
        @foreach($actions as $action)
            @if (method_exists($action, 'massAction'))
                @include('voyager::bread.partials.actions', ['action' => $action, 'data' => null])
            @endif
        @endforeach
        @include('voyager::multilingual.language-selector')  --}}
    </div>
@stop

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
                                                <a href="{{ route('template_update', $item->id) }}" class="btn btn-default" role="button">Editar</a> 
                                                <a href="#" class="btn btn-default" role="button" disabled="disabled">Activar</a>
                                            @else
                                                <a href="{{ route('template_update', $item->id) }}" class="btn btn-default" role="button">Editar</a> 
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