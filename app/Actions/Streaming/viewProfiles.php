<?php

namespace App\Actions\Streaming;

use TCG\Voyager\Actions\AbstractAction;


class viewProfiles extends AbstractAction
{
    public function getTitle()
    {
        return 'Perfiles';
    }

    public function getIcon()
    {
        return 'voyager-person';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class'   => 'btn btn-sm btn-success pull-right profile',
            'data-id' => $this->data->{$this->data->getKeyName()},
            'id'      => 'profile-'.$this->data->{$this->data->getKeyName()},
            
        ];
    }
    //Rutas de la accion
    public function getDefaultRoute()
    {
        //return route('voyager.profiles.index'); 
      
        return 'javascript:;';
    }
    //en que view se mostrará nuestra accion
   /*  public function shouldActionDisplayOnDataType()
    {
    return $this->dataType->slug == 'accounts';
    } */
}