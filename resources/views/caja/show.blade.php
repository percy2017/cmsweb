@extends('voyager::master')
@section('page_title', 'Viendo Caja')
 @section('page_header')
        <h1 class="page-title">
            <i class="voyager-treasure"></i> Viendo Caja
        </h1>
       
@stop
@section('content')
        <div class="page-content">
            {{-- <form action="{{route('cajas_close')}}" method="post"> --}}
                <div class="page-content browse container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-bordered">
                                <div class="row">
                                    <div class="col-md-6">
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
                                        <hr style="margin:0;">
                                        <div class="row">
                                            <div class="col-md-4" style="margin:0px">
                                                <div class="panel-heading" style="border-bottom:0;">
                                                    <h3 class="panel-title">Monto de apertura</h3>
                                                </div>
                                                <div class="panel-body" style="padding-top:0;">
                                                    <p>0 Bs.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin:0px">
                                                <div class="panel-heading" style="border-bottom:0;">
                                                    <h3 class="panel-title">Pagos con tajeta</h3>
                                                </div>
                                                <div class="panel-body" style="padding-top:0;">
                                                    <p>{{ number_format(100, 2, '.', '') }} Bs.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin:0px">
                                                <div class="panel-heading" style="border-bottom:0;">
                                                    <h3 class="panel-title">Monto de cierre</h3>
                                                </div>
                                                <div class="panel-body" style="padding-top:0;">
                                                    <p>100 Bs.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin:0;">
                                    <div class="row">
                                        <div class="col-md-6" style="margin:0px">
                                            <div class="panel-heading" style="border-bottom:0;">
                                                <h3 class="panel-title">Monto de cierre</h3>
                                            </div>
                                            <div class="panel-body" style="padding-top:0;">
                                                <p id="label-total">20 Bs.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="margin:0px">
                                            <div class="panel-heading" style="border-bottom:0;">
                                                <h3 class="panel-title">Monto faltante</h3>
                                            </div>
                                            <div class="panel-body" style="padding-top:0;">
                                                <p id="label-faltante">20 Bs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-bordered">
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <div class="table-responsive" style="height:300px">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Hora</th>
                                                        <th>Concepto</th>
                                                        <th>Monto</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>12</td>
                                                        <td>1</td>
                                                        <td>5 Bs.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-right">
                                            <h4>Total ingresos: {{number_format(150, 2, ',', '')}} Bs.</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="table-responsive" style="height:300px">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Hora</th>
                                                        <th>Concepto</th>
                                                        <th>Monto</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>08</td>
                                                        <td>5</td>
                                                        <td 10 Bs.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-right">
                                            <h4>Total egresos: {{number_format(20, 2, ',', '')}} Bs.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    @stop
