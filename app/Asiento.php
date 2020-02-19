<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Asiento extends Model
{
    protected $fillable = ['concepto','monto','tipo','user_id','caja_id'];
    protected $dates = ['deleted_at'];   

}
