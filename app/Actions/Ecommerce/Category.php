<?php

namespace App\Actions\Ecommerce;

use TCG\Voyager\Actions\AbstractAction;

class Category extends AbstractAction
{
    public function getTitle()
    {
        return 'Categorias';
    }

    public function getIcon()
    {
        return 'voyager-anchor';
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
        return route('voyager.product_categories.index');
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'products';
    }
    public function massAction($ids, $comingFrom)
    {
        // Do something with the IDs
        return redirect()->route('voyager.product_categories.index');
    }
}