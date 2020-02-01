<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Blocks extends AbstractAction
{
    public function getTitle()
    {
        return 'Blocks';
    }

    public function getIcon()
    {
        return 'voyager-github';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('template_json', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'templates';
    }
}