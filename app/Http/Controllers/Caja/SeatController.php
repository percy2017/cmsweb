<?php

namespace App\Http\Controllers\Caja;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Caja;
class SeatController extends Controller
{
    public function show (Caja $caja) {
        return view('caja.show', compact('caja'));
    }
}
