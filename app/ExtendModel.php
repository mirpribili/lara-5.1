<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ExtendModel extends Model
//Он заботится слишком обо многих вещах.
{
    public function getActive(){
        return$this->published()->get();
    }
    public function getBySlug($slug){
        return$this->published()->slug($slug)->firstOrFail();
    }

    /* scope - своего рода области или заготовки */
    public function scopePublished($query){
        $query->where(['active'=>1]);
    }
    public function scopeSlug($query,$slug){
        $query->where(['slug'=>$slug]);
    }
}