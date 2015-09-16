<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();
        \App\User::create(
            [
                'name'		=>'Admin',
                'email' 	=>'admin@admin.ya',
                'password'=>bcrypt('123456'),
                //'password'	=>'$2y$10$KmWJAKYfeed8Qf7c0VybNOLXu65PyavkyrVLurz5IzHyML9fC/KHu',
                'role'		=>'admin',
                //'bann'		=>'0',
                //'about'		=>'123456',
                //'confirmed' =>'1',
                //'confirmation'=>NULL,
                'remember_token'=>NULL,
            ]);
    }
}
