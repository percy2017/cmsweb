<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Resizable;
class Template extends Model
{
    use Resizable;
    use Commentable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
