{{-- <h3>Periles</h3> --}}
<a href="#" onclick="s_bread('{{ route('s_create') }}', 'create')" class="btn btn-sm btn-primary">
   Agregar
</a>
<hr />
<table class="table table-bordered">
    <caption>List of users</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Estado</th>
            <th scope="col">Membresia</th>
            <th scope="col">Tiempo Res</th>
            <th scope="col">acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($viewProfile as $item)
        <tr>
            <th scope="row">{{ $item->id}}</th>
            <td>{{ $item->fullname }} </td>
            <td>{{ $item->statu }}</td>
            <td>{{ $item->membership }}</td>
            <td>
              {{--  @php
                   $fechaEmision = Carbon::parse($item->startdate);
                    $fechaExpiracion = Carbon::parse($item->finaldate);

                    $diasDiferencia = $fechaExpiracion->diffInDays($fechaEmision);
               @endphp --}}
                {{ $item->finaldate}}  
             </td>
            <td>    
                <a href="#" onclick="s_bread('{{ route('s_edit', $item->id) }}', 'edit')" class="btn btn-warning">
                    <i class="voyager-pen"></i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=591{{$item->phone}}&text=Hola%2C*{{$item->fullname}}* {{ setting('streaming.mensaje1') }} *{{ $item->account->type }}* {{ setting('streaming.mensaje2') }}"  target="_blank" onclick="" class="btn btn-success">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>