<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash as Bcrypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Bagas Aditya Mahendra',
        	'email' => 'baagas0@gmail.com',
        	'password' => Bcrypt::make('123456')
        ]);
    }
}
