<?php

namespace App\Actions\Ecommerce;

use TCG\Voyager\Actions\AbstractAction;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Database\Schema\SchemaManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductDetails extends AbstractAction
{
    public function getTitle()
    {
        return 'Detalles';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary',
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'products';
    }

    public function getDefaultRoute()
    {
        return route('e_details', $this->data->{$this->data->getKeyName()});
        // return route('voyager.product_details.index');
    }
}