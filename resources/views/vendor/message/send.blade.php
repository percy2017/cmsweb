@extends('voyager::master')

{{-- @section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural')) --}}


@section('css')
@stop

@section('content')
    <div class="page-content container-fluid" id="voyagerBreadEditAdd">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary panel-bordered">
                    <div class="panel-body">
                        <form action="{{ route('messages_send') }}" method="post">
                            @csrf
                            <div class="form-group col-md-6">
                                <label>Mensaje</label>
                                <textarea class="form-control" name="mensaje"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                            </div>
                            <div class="form-group col-md-6">
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

<script src="{{ asset('js/app.js') }}"></script>

<script>
    Echo.channel('home').listen('NewMessage', (e) => {
        console.log(e.message);
        alert(e.message);
    });
</script>
@stop