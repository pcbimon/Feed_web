<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    //
    protected $fillable = [
        'TypeName'
    ];
    public function users()
    //ผู้ใช้แต่ละประเภทมีหลายคน
    {
      return $this->hasMany('App\User');
    }
}
