<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
class FrontendController extends Controller
{
    function politicas()
    {
        return view('policies');
    }

    function plantillas()
    {
        $collection = Template::get();
        return view('template')->with(compact('collection'));
    }
}
