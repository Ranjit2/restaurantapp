<?php

use Illuminate\Database\Seeder;
use App\User;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     	User::create([
     		'name'=>'John Doe',
     		'email'=>'restaurant@info.com',
     		'password'=>Hash::make('password')

     	]);   
    }
}
