<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
class FrontendController extends Controller
{
    function default()
    {
        $template = setting('site.template');
        switch ($template) {
            case 'LPS':
                # landing Page SOfware
                return view('template.LPS');
                break;
            case 'LPR':
                # code...
                # landing Page Restorant
                return view('template.LPR');
            case 'LPM':
                # code...
                # landing Page Medical
                return view('template.LPM');
                break;
            case 'LPH':
                # code...
                # landing Page Hotel
                return view('template.LPH');
                break;
            case 'LPE':
                # code...
                # landing Page Eventos
                return view('template.LPE');
                break;
            case 'LPB':
                # code...
                # landing Page Band
                return view('template.LPB');
                break;
            case 'LPC':
                # landing Page Contruccion
                return view('template.LPC');
                break;
            case 'LPT':
                # code...
                # landing Page Travel
                return view('template.LPT');
                break;
            case 'LPU':
                # code...
                return view('template.LPU');
                break;
            case 'LPF':
                # code...
                return view('template.LPF');
                break;
            case 'LPV':
                # code...
                return view('template.LPV');
                break;
            case 'LPP':
                # code...
                return view('template.LPP');
                break;
            case 'LPA':
                # code...
                return view('template.LPA');
                break;
            case 'LPI':
                # code...
                return view('template.LPI');
                break;
            case 'EC1':
                # code...
                return view('template.ecommerce1');
                break;
            case 'EC2':
                # code...
                return view('template.ecommerce2');
                break;
            case 'EC3':
                # code...
                return view('template.ecommerce3');
                break;
            default:
                # code...
                break;
        }
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
        // return $slug;
        $collection = Template::where('slug', $slug)->first();
        return view('template.details')->with(compact('collection'));
    }
}
