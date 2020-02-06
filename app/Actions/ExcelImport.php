<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Database\Schema\SchemaManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class ExcelImport extends AbstractAction
{
    public function getTitle()
    {
        return 'Crear Importacion';
    }

    public function getIcon()
    {
        return 'voyager-upload';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-primary',
        ];
    }

    public function getDefaultRoute()
    {
        return route('excels_import');
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'excels';
    }

    public function massAction($ids, $comingFrom)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', 'excels')->first();
        
        $dataTypes = Voyager::model('DataType')->select('id', 'name', 'slug')->get()->keyBy('name')->toArray();
        $tables = array_map(function ($table) use ($dataTypes) {
            $table = Str::replaceFirst(DB::getTablePrefix(), '', $table);

            $table = [
                'prefix'     => DB::getTablePrefix(),
                'name'       => $table,
                'slug'       => $dataTypes[$table]['slug'] ?? null,
                'dataTypeId' => $dataTypes[$table]['id'] ?? null,
            ];
            return (object) $table;
        }, SchemaManager::listTableNames());

        return view('vendor.excel.import', [
            'dataType' => $dataType,
            'tables'    => $tables
        ]);
    }
}