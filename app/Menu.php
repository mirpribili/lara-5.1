<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends ExtendModel
{
    protected $table='menus';

    public function getLeftMenu(){
        //return \App\Menu::where(['active'=>'1', 'position'=>'left'])->orderBy('weight')->get();
        return $this->orderBy('weight')->published()->left()->get();
    }
    public function getRightMenu(){
        return $this->orderBy('weight')->published()->right()->get();
    }

    public function scopeLeft($query){
        $query->where(['position'=>'left']);
    }
    public function scopeRight($query){
        $query->where(['position'=>'right']);
    }
}
