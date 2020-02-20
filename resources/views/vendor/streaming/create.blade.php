<h3 class="text-center">Nuevo Perfil</h3>
<form id="form_profile" method="POST">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" type=text Name="fullname" placeholder="Nombre Completo" autofocus />
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input class="form-control" type=text name="phone" placeholder="Whatsapp" />
    </div>

    <div class="form-group">
        <label>Membresia</label>
        <select name="membership" id="input" class="form-control" required="required">
            @foreach ($membership as $item)
                <option value="{{ $item }}">{{ $item }}</option>
            @endforeach
        </select>
    </div>
  
    <hr />
    <button class="btn btn-primary" type="submit">Agregar</button>
    <a href="#" onclick="s_bread('{{ route('s_perfiles', ':id') }}', 'index')" class="btn btn-danger">Cancelar</a>
</form>