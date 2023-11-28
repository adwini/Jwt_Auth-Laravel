<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'adwin ko', 
                'email' => 'adwin@gmail.com',
                'password' => Hash::make('1122'),
                'status' => 'inactive'         
            ],
            [
                'name' => 'Godwin', 
                'email' => 'godwin@gmail.com',
                'password' => Hash::make('winwin'),
                'status' => 'active'         
            ]
        
        
    ); foreach ($users as $key => $user) {
        User::create($user);
    }
    }
}
 //     [
        //     'name' => 'ankol tomas', 
        //     'email' => 'ankol@gmail.com',
        //     'password' => Hash::make('ankol'),
        //     'status' => 'active'
        // ],