<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
use App\Block;
use App\Page;
use NumerosEnLetras;
use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    function default()
    {
        $template = setting('site.template');
        $collection = Template::where('name_short', $template)->first();
        $blocks = Block::where('template_id', $collection->id)->get();

        return view("template.".$collection->name_short, compact('collection', 'blocks'));
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

    public function change($slug)
    {
        DB::table('settings')
            ->where('key', 'site.template')
            ->update(['value' => $slug]);

        return back()->with([
            'message'    => 'Plantilla Actualizada - '.$slug,
            'alert-type' => 'success',
        ]);
    }

    public function pages($slug)
    {
        $pages = Page::where('slug', $slug)->first();
        return view('pages.'.$pages->slug, [
            'pages' => $pages
        ]);
    }
}
