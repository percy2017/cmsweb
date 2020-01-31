<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\Template;
use App\Block;
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

    public function update($id)
    {
        // return $id;
        $this->authorize('browse_bread');
        // $dataType = Voyager::model('DataType')->whereName('templates')->first();
        $dataType = Voyager::model('DataType')->where('slug', '=', 'templates')->first();
        // return $dataType;
        // $collection = Template::where('id', $id)->first();
        

        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses_recursive($model))) {
                $model = $model->withTrashed();
            }
            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope'.ucfirst($dataType->scope))) {
                $model = $model->{$dataType->scope}();
            }
            $dataTypeContent = call_user_func([$model, 'findOrFail'], $id);
        } else {
            // If Model doest exist, get data from table name
            $dataTypeContent = DB::table($dataType->name)->where('id', $id)->first();
        }

        foreach ($dataType->editRows as $key => $row) {
            $dataType->editRows[$key]['col_width'] = isset($row->details->width) ? $row->details->width : 100;
        }

        // If a column has a relationship associated with it, we do not want to show that field
        // $this->removeRelationshipField($dataType, 'edit');

        // Check permission
        $this->authorize('edit', $dataTypeContent);
        
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        return view('vendor.template.edit')->with(compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
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

    public function json($block_id)
    {
        $block = Template::where('id', $block_id)->first();
        return view('vendor.template.json', [
            'block' => $block
        ]);
    }
}
