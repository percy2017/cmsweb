<?php

namespace App\Actions\Ecommerce;

use TCG\Voyager\Actions\AbstractAction;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Database\Schema\SchemaManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\ProductDetail;
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
            'class' => 'btn btn-sm btn-success',
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'products';
    }

    public function getDefaultRoute()
    {
        // return route('e_details', $this->data->{$this->data->getKeyName()});
        $pd = ProductDetail::where('id', $this->data->{$this->data->getKeyName()})->get();
        // return $pd;
        if(count($pd) <= 0){
            return route('voyager.product_details.create');
        }else{
            return route('voyager.product_details.edit', $this->data->{$this->data->getKeyName()});
        }
        
        // return route('voyager.product_details.index');
    }   
}