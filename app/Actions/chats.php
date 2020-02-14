<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Database\Schema\SchemaManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Chats extends AbstractAction
{
    public function getTitle()
    {
        return 'Chats';
    }

    public function getIcon()
    {
        return 'voyager-barbell';
    }

    public function getPolicy()
    {
        return 'browse_messages';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-success',
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

        return view('vendor.message.chats');
    }
}