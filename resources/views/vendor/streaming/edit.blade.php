<form action="{{ route('s_update') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Estado</label>
        <input value="{{$profile->statu}}" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Fecha de renovacion</label>
        <select name="status" id="">
            <option value=""></option>
        </select>
      {{--   {{ $dataRow->details['options'] }} --}}
     {{--  corregir aqui --}}
        @foreach ($dataRow->details as $item => $value)
            {{ $value['options'] }}
        @endforeach
     {{--  corregir aqui --}}
        <input value="{{$profile->finaldate}}" type="text" class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">actulizar</button>

</form>