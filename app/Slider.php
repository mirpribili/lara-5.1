<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends ExtendModel
{
    protected $table='slider';
    public function getActive(){
        return$this->orderBy('weight')->published()->get();
    }
}