<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionUser extends Model
{
    //
    public function users()
    //ผู้ใช้แต่ละประเภทมีหลายคน
    {
      return $this->hasMany('App\User');
    }
    public function subject()
    {
      return $this->hasMany('App\SubjectAnalysis');
    }
}
