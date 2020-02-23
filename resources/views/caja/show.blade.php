@extends('voyager::master')
@section('page_header')
<h1 class="page-title">
    <i class="voyager-treasure"></i> Viendo Caja
</h1>
@if($caja->estado)
    <button type="button" class="btn btn-success btn-small">Abierta</button>
@else
<button type="button" class="btn btn-danger btn-small">Cerrada</button>
@endif
<a href="{{route('voyager.cajas.index')}}" class="btn btn-warning btn-small">
    <i class="voyager-list"></i> <span>Volver a la lista</span>
</a>
@stop
@section('content')
<div id="app" class="page-content">
   <box :caja="{{$caja}}"></box>
</div>
@endsection
@section('javascript')
<script src="{{asset('js/app.js')}}"></script>
@stop