{{-- <h3>Periles</h3> --}}
<a href="#" onclick="s_bread('{{ route('s_create') }}', 'create')" class="btn btn-sm btn-primary">Agregar</a>
<hr />
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Fecha de Inicio</th>
            <th scope="col">acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($viewProfile as $item)
        <tr>
            <th scope="row">{{ $item->id}}</th>
            <td>{{ $item->fullname }} </td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->startdate }} </td>
            <td>
            <a href="#" onclick="s_edit('{{ route('s_edit', $item->id) }}')" class="btn btn-warning">
                    <i class="voyager-pen"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>