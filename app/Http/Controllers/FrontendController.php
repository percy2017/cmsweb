<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
use NumerosEnLetras;
class FrontendController extends Controller
{
    function default()
    {
        $template = setting('site.template');
        $collection = Template::where('name_short', $template)->first();
        

        // switch ($template) {
        //     case 'LPS':
        //         return view('template.LPS');
        //         break;
        //     case 'LPR':
        //         return view('template.LPR');
        //     case 'LPM':
        //         return view('template.LPM');
        //         break;
        //     case 'LPH':l
        //         return view('template.LPH');
        //         break;
        //     case 'LPE':
        //         return view('template.LPE');
        //         break;
        //     case 'LPB':
        //         return view('template.LPB');
        //         break;
        //     case 'LPC':
        //         return view('template.LPC');
        //         break;
        //     case 'LPT':
        //         return view('template.LPT');
        //         break;
        //     case 'LPU':
        //         return view('template.LPU');
        //         break;
        //     case 'LPF':
        //         return view('template.LPF');
        //         break;
        //     case 'LPV':
        //         return view('template.LPV');
        //         break;
        //     case 'LPP':
        //         return view('template.LPP');
        //         break;
        //     case 'LPA':
        //         return view('template.LPA');
        //         break;
        //     case 'LPI':
        //         return view('template.LPI');
        //         break;
        //     case 'EC1':
        //         return view('template.ecommerce1');
        //         break;
        //     case 'EC2':
        //         return view('template.ecommerce2');
        //         break;
        //     case 'EC3':
        //         return view('template.ecommerce3');
        //         break;
        //     default:
        //         break;
        // }
        // return $collection->name_short;
        // $view = "template.".$collection->name_short;


        return view("template.".$collection->name_short, compact('collection'));
    }
    function politicas()
    {
        return view('policies');
    }

    function index()
    {
        $collection = Template::get();
        return view('template.index')->with(compact('collection'));
    }

    function details($slug)
    {
        $collection = Template::where('slug', $slug)->first();
        return view('template.details')->with(compact('collection'));
    }
}
