<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    function datails()
    {
        return view('vendor.ecommerce.details');
    }
}
