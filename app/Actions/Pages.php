<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Pages extends AbstractAction
{
    public function getTitle()
    {
        return 'Pages';
    }

    public function getIcon()
    {
        return 'voyager-book';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('template_blocks', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'templates';
    }
}