<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\ProductDetail;
class EcommerceController extends Controller
{

    function product_details($product_id)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', 'product_details')->first();
        $data = ProductDetail::where('id', $product_id)->get();
        return $dataType;
        return view('vendor.ecommerce.details', [
            'dataType' => $dataType,
            'data' => $data
        ]);
    }
}
