<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Carbon\Carbon;
use TCG\Voyager\Facades\Voyager;
use App\Events\NewMessage;


class MessageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function send(Request $request)
    {
        // return $request->mensaje;
        $message_to = Message::create([
            'from'      => 1,
            'to'        => 2,
            'message'   => $request->mensaje
        ]);

        // return $message_to;
        event(new NewMessage($message_to));

        return redirect('admin/messages')->with([
            'message'    => 'Mensaje Enviado',
            'alert-type' => 'success',
        ]);

    }
}
