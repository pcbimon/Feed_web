<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receive extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    // protected $fillable = [
    //     'name','countable','place_to_buy','syntax','namebill'
    // ];
}
