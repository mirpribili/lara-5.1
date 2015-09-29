<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends ExtendModel
{
    protected $table='projects';
    public function galleries(){
        return $this->hasMany('App\Gallery');
    }
}
