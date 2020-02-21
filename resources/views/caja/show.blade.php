@extends('voyager::master')
@section('page_header')
<h1 class="page-title">
    <i class="voyager-treasure"></i> Viendo Caja
</h1>
@stop
@section('content')
<div class="page-content">
    <div class="page-content browse container-fluid">
        <div class="col-md-12">
            <div class="panel panel-bordered">
              <div class="row">
                  <div class="col-md-6" >
                    <div class="row">
                        <div class="col-md-6" style="margin:0px">
                            <div class="panel-heading" style="border-bottom:0;">
                                <h3 class="panel-title">Monto total de ingresos</h3>
                            </div>
                            <div class="panel-body" style="padding-top:0;">
                                <p>{{$caja->importe_inicio}} Bs.</p>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin:0px">
                            <div class="panel-heading" style="border-bottom:0;">
                                <h3 class="panel-title">Monto total de egresos</h3>
                            </div>
                            <div class="panel-body" style="padding-top:0;">
                                <p>{{$caja->saldo}} Bs.</p>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection