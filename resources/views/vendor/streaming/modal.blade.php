<div class="modal modal-success fade" tabindex="-1" id="profile_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="voyager-person"></i> Esta cuenta tiene los sgtes perfiles :</h4>
            </div>
            <div class="modal-body">

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
                        <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>
            <div class="modal-footer">
                {{-- <form action="#" id="delete_form" method="POST">
                   
                    <input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
                </form> --}}
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
