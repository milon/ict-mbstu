<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
    		'name'		=> 'Admin',
    		'email'		=> 'admin@ict-mbstu.com',
    		'password' 	=> bcrypt('ict-mbstu')
    	]);
    }
}
