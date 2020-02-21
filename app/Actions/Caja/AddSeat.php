<?php

namespace App\Actions\Caja;

use TCG\Voyager\Actions\AbstractAction;
use Illuminate\Http\Request;
class AddSeat extends AbstractAction
{
    public function getTitle()
    {
        return 'VerAsiento';
    }

    public function getIcon()
    {
        return 'voyager-documentation';
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
        return route('showcaja', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'cajas';
    }
}