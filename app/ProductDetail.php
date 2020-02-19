<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductDetail extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'product_details';
    protected $fillable = [
        'id', 'title', 'product_id', 'images', 'price', 'description', 'user_id',
    ];
}
