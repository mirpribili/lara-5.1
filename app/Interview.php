<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table='interviews';
    public function user(){
        return $this->belongsTo('App\User');
    }
}
