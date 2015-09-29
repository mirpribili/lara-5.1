<?php

use Illuminate\Database\Seeder;

class galleries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('galleries')->truncate();
        \App\Menu::create(
            [
                'project_id'	=>'1',
                'active'		=>'1',
                'weight'		=>'1',
                'image'		    =>'FpAzPWZQyeGoS4Gp6HwVeKYzu9cOmniV.png',
                'alt'		    =>'image',
                'title'		    =>'title',
            ]);
        \App\Menu::create(
            [
                'project_id'	=>'1',
                'active'		=>'1',
                'weight'		=>'2',
                'image'		    =>'EG22nAstcbxxOpJnbWyTjiKPDs95zpgi.png',
                'alt'		    =>'aaa',
                'title'		    =>'fff',
            ]);
        \App\Menu::create(
            [
                'project_id'	=>'1',
                'active'		=>'1',
                'weight'		=>'4',
                'image'		    =>'1mWpNjetoS8n05T6M0YYHlhGidgqpVRh.png',
                'alt'		    =>'asd',
                'title'		    =>'dsa',
            ]);
        \App\Menu::create(
            [
                'project_id'	=>'2',
                'active'		=>'1',
                'weight'		=>'1',
                'image'		    =>'lCWXTO5DsXwdkeHlMGpkETKytpSwpANC.png',
                'alt'		    =>'assa',
                'title'		    =>'saas',
            ]);
    }
}
