<?php

use Illuminate\Database\Seeder;

class slides extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('slider')->truncate();
        \App\User::create(
            [
                'active'	=>'1',
                'weight'	=>'1',
                'image'	    =>'r835lAdPHjLOiGEYL4IQT61ejGlXpWyj.png',
            ]);
        \App\User::create(
            [
                'active'	=>'1',
                'weight'	=>'2',
                'image'	    =>'RS9lNnyXrdGw5AQLXPntEkszoiwBOsPo.png',
            ]);
        \App\User::create(
            [
                'active'	=>'1',
                'weight'	=>'3',
                'image'	    =>'tUvecAQnYgTTwzt7O5wqdYmUm8UMbBPs.png',
            ]);
        \App\User::create(
            [
                'active'	=>'1',
                'weight'	=>'4',
                'image'	    =>'765vSWZWwoP1CtAVaTTPZZgBKI5faAgj.png',
            ]);
        \App\User::create(
            [
                'active'	=>'1',
                'weight'	=>'5',
                'image'	    =>'snpCNCPZD8wwotqs9YNn5NpMBz5aFuup.png',
            ]);
    }
}
