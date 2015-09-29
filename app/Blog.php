<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends ExtendModel
{
    protected $table='blogs';


    public function getActive(){
        // получим настройки из админки
        $settings=json_decode(file_get_contents(storage_path().'/administrator_settings/settings.json'));

        return$this->published()->latest()->paginate($settings->blog_pagination);
    }
}
