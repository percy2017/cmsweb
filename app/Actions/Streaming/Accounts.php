<?php

namespace App\Actions\Streaming;

use TCG\Voyager\Actions\AbstractAction;

class Accounts extends AbstractAction
{
    public function getTitle()
    {
        return 'Perfiles';
    }

    public function getIcon()
    {
        return 'fa fa-users';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class'   => 'btn btn-md btn-warning'
        ];
    }
    
    public function getDefaultRoute()
    {
        return route('voyager.profiles.index');
        // return 'javascript:;';
    }
   
    public function shouldActionDisplayOnDataType()
    {
    return $this->dataType->slug == 'accounts';
    } 

    public function massAction($ids, $comingFrom)
    {
        // Do something with the IDs
        return redirect()->route('voyager.profiles.index');
    }
}