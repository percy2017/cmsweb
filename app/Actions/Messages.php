<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Database\Schema\SchemaManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Messages extends AbstractAction
{
    public function getTitle()
    {
        return 'Nuevo Mensaje';
    }

    public function getIcon()
    {
        return 'voyager-external';
    }

    public function getPolicy()
    {
        return 'browse_messages';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-primary',
        ];
    }

    public function getDefaultRoute()
    {
        // return route('voyager.roles.index');
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'messages';
    }

    public function massAction($ids, $comingFrom)
    {

        return view('vendor.message.send');
    }
}