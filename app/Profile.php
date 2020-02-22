<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Profile extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['fullname','phone','statu','finaldate','startdate','membership','observation','account_id'];
    protected $table = 'profiles';

    public function account() {

        return $this->belongsTo('App\Account');

    }


}
