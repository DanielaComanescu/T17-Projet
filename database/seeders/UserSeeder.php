<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=> 'Alexandre Luis',
                'email'=> 'alexandre@gmail.com',
                'password'=> Hash::make('123456789'),
                'phone_number'=> '000 000 0000',
                'is_admin' => true
            ],
            
            [
                'name'=> 'Mehdi Charigan',
                'email'=> 'mehdi@gmail.com',
                'password'=> Hash::make('azertyuiop'),
                'phone_number'=> '111 111 123 1',
                'is_admin' => false
            ],

            [
                'name'=> 'Cedric Lolilol',
                'email'=> 'cedric@gmail.com',
                'password'=> Hash::make('12345azerty'),
                'phone_number'=> '222 222 2222',
                'is_admin' => false
            ]
        ]
        );
    }
}
