<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\Template;
use App\Block;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class TemplateController extends Controller
{
    public function change($template_change)
    {
        $template_change;
        DB::table('settings')
            ->where('key', 'site.template')
            ->update(['value' => $template_change]);

        return back()->with([
            'message'    => 'Plantilla Actualizada - '.$template_change,
            'alert-type' => 'success',
        ]);
    }

    public function blocks($template_id)
    {
        $blocks = Block::where('template_id', $template_id)->get();
        return view('vendor.template.json', [
            'blocks' => $blocks
        ]);
    }

    public function block_update(Request $request, $block_id)
    {
        $block = Block::where('id', $block_id)->first();
        
        $mijson = $block->details;
        
        foreach(json_decode($block->details, true) as $item => $value)
        {
              
            if($request->hasFile($value['name']))
            {
                $dirimage = Storage::disk('public')->put('blocks/'.date('F').date('Y'), $request->file($value['name']));
                $mijson = str_replace($value['value'], $dirimage, $mijson);
                
            }else{
                $mijson = str_replace($value['value'], $request[$value['name']], $mijson);
            }
        }
        $block->details = $mijson;
        $block->save();
        
        return back()->with([
            'message'    => 'Block Actualizada - '.$block->title,
            'alert-type' => 'success',
        ]);
    }

    public function delete($block_id)
    {
        Block::where('id', $block_id)->delete();
        return back()->with([
            'message'    => 'Block eliminado',
            'alert-type' => 'success',
        ]);
    }

}
