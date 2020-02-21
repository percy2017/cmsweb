<form   id="form_profileEdit" method="POST">
    @csrf
    <input type="hidden" value="{{ $profile->id }}" id="editForm">
    <div class="form-group">
        <label for="">Membresia</label>
        <select class="form-control" name="membership" id="">
            @foreach ($membership as $item )
                @if ( $profile->membership == $item)
                    <option selected value="{{ $item }}">{{ $item }}</option>
                @else
                    <option value="{{ $item }}">{{ $item }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Estado</label>
        <select class="form-control" name="statu" id="">
            @foreach ($statu as $item )
                @if ( $profile->statu == $item)
                     <option selected value="{{ $item }}">{{ $item }}</option>
                @else
                    <option value="{{ $item }}">{{ $item }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Facturacion</label>
        <input name="finaldate" value="{{$profile->finaldate}}" type="text" class="form-control">
    </div>
    <button type="button" id="submitFormEdit" class="btn btn-primary btn-prime white btn-flat">Actulizar</button>
    <a onclick="s_bread('{{ route('s_perfiles', ':id') }}', 'index')"
        class="btn btn-default btn-prime white btn-flat">Cancelar
    </a>

</form>