<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\Template;
use Illuminate\Support\Facades\DB;
class TemplateController extends Controller
{
    public function index()
    {
        $this->authorize('browse_bread');
        $dataType = Voyager::model('DataType')->whereName('templates')->first();
        $collection = Template::get();
        return view('vendor.template.index')->with(compact('dataType', 'collection'));
    }

    public function change($template_change)
    {
        DB::table('settings')
            ->where('key', 'site.template')
            ->update(['value' => $template_change]);

        return back()->with([
            'message'    => 'Plantilla Actualizada - '.$template_change,
            'alert-type' => 'success',
        ]);
    }
}
