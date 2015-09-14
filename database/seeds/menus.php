<?php

use Illuminate\Database\Seeder;

class menus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menus')->truncate();
        \App\Menu::create(
            [
                'active'		=>'1',
                'title'		    =>'Home',
                'position'		=>'Left',
                'weight'		=>'1',
                'url'		    =>'/',
            ]);
        \App\Menu::create(
            [
                'active'		=>'1',
                'title'		    =>'Projects',
                'position'		=>'Left',
                'weight'		=>'2',
                'url'		    =>'/projects',
            ]);
        \App\Menu::create(
            [
                'active'		=>'1',
                'title'		    =>'About',
                'position'		=>'Left',
                'weight'		=>'3',
                'url'		    =>'/about',
            ]);
        \App\Menu::create(
            [
                'active'		=>'1',
                'title'		    =>'Blog',
                'position'		=>'right',
                'weight'		=>'4',
                'url'		    =>'/blog',
            ]);
        \App\Menu::create(
            [
                'active'		=>'1',
                'title'		    =>'Press',
                'position'		=>'right',
                'weight'		=>'5',
                'url'		    =>'/press',
            ]);
        \App\Menu::create(
            [
                'active'		=>'1',
                'title'		    =>'Contact',
                'position'		=>'right',
                'weight'		=>'6',
                'url'		    =>'/contact',
            ]);
    }
}
