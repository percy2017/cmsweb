<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Message extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'messages';

    protected $fillable = [
        'from', 'to', 'message',
    ];
}
