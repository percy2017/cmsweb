@extends('voyager::master')

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        {{ $block }}
                        <form></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script type="text/javascript" src="{{ asset('vendor/admin/underscore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/admin/jsv.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendor/admin/jsonform.js') }}"></script>
	<script type="text/javascript">
		$('form').jsonForm({
			schema: {
				name: {
					type: 'string',
					title: 'Name',
					required: true
				},
				age: {
					type: 'number',
					title: 'Age'
				}
			},
			onSubmit: function (errors, values) {
				if (errors) {
					$('#res').html('<p>I beg your pardon?</p>');
				} else {
					$('#res').html('<p>Hello ' + values.name + '.' +
						(values.age ? '<br/>You are ' + values.age + '.' : '') +
						'</p>');
				}
			}
		});
	</script>
    
@endsection