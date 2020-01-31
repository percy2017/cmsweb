<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class TrackingUsers extends AbstractHandler
{
    protected $codename = 'TrackingUsers';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.trakingusers', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}