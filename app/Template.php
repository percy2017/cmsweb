<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Template extends Model
{
    use Commentable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
