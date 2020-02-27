<?php

namespace App\Http\Controllers\Caja;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Caja;
use App\Asiento;
class SeatController extends Controller
{
    public function show (Caja $caja) {
        return view('caja.show', compact('caja'));
    }

    public function storemov (Request $request) {
        $this->validate($request, [
            'concepto' => 'required',
            'monto' => 'required',
            'tipo' => 'required'
        ]);
        
        $asiento = new Asiento;
        $asiento->concepto = $request->get('concepto');
        $asiento->monto = $request->get('monto');
        $asiento->tipo = $request->get('tipo');
        $asiento->caja_id = $request->get('caja_id');
        $asiento->user_id = auth()->user()->id;
        $asiento->save();

        return response()->json([
            'saved' => true,
            'data' => $asiento
        ]);
    }
}
