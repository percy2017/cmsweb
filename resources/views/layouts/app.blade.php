<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('template.partials.meta')
    @yield('css')
</head>
<body>

    <div id="app">
        @if ($alerts = Session::get('message'))
            <div class="alerts">
                <div class="alert alert-{{ Session::get('alert-type') }}">
                <a href="/" class="btn btn-primary">Ver los Cambios</a>
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ Session::get('message') }}</strong>
                </div>
            </div>
        @endif
        {{--  <main class="py-4">  --}}
            @yield('content')
        {{--  </main>  --}}
    </div>

    @include('template.partials.script')
    @yield('js')
</body>
</html>
