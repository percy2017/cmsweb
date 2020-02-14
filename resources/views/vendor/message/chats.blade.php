@extends('voyager::master')

{{-- @section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural')) --}}


@section('css')
    <style>
        /* Chat containers */
        .container {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
        }

        /* Darker chat container */
        .darker {
        border-color: #ccc;
        background-color: #ddd;
        }

        /* Clear floats */
        .container::after {
        content: "";
        clear: both;
        display: table;
        }

        /* Style images */
        .container img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
        }

        /* Style the right image */
        .container img.right {
        float: right;
        margin-left: 20px;
        margin-right:0;
        }

        /* Style time text */
        .time-right {
        float: right;
        color: #aaa;
        }

        /* Style time text */
        .time-left {
        float: left;
        color: #999;
        }
    </style>
@stop

@section('content')
    <div class="page-content container-fluid" id="voyagerBreadEditAdd">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary panel-bordered">
                    <div class="panel-body">
                        <div class="form-group container">
                            <img src="/w3images/bandmember.jpg" alt="Avatar">
                            <p>Hello. How are you today?</p>
                            <span class="time-right">11:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')

<script src="{{ asset('js/app.js') }}"></script>

<script>
    Echo.private('user.{{ Auth::user()->id }}')
        .listen('NewMessage', (e) => {
        alert(e.message.message);
    });
</script>
@stop