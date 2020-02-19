<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{

    function product_details()
    {
        return view('vendor.ecommerce.details');
    }
}
