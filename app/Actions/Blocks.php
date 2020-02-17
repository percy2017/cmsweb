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
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success',
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