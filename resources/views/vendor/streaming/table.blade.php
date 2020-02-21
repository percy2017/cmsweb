{{-- <h3>Periles</h3> --}}
<a href="#" onclick="s_bread('{{ route('s_create') }}', 'create')" class="btn btn-sm btn-primary">Agregar</a>
<hr />
<table class="table">
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
            <td>{{ \Carbon\Carbon::now()->diffForHumans($item->finaldate) }}</td>
            {{-- <td>{{ Carbon::now()->$item->finaldate->diffForHumans() }}</td> --}}
            <td>
                <a href="#" onclick="s_bread('{{ route('s_edit', $item->id) }}', 'edit')" class="btn btn-warning">
                        <i class="voyager-pen"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>