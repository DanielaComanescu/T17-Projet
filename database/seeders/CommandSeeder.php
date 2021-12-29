<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commands')->insert([
            [
                'car_id'=> 1,
                'status'=> 'En cours',
                'user_id'=> 1,
                'name'=> 'Alexandre Luis',
                'email'=> 'alexandre@gmail.com',
                'phone_number'=> '000 000 0000',
            ],
            [
                'car_id'=> 2,
                'status'=> 'Vendu',
                'user_id'=> 4,
                'name'=> 'Daniela Lalal',
                'email'=> 'daniela@gmail.com',
                'phone_number'=> '111 111 1111',
            ],
            [
                'car_id'=> 3,
                'status'=> 'Annulée',
                'user_id'=> 3,
                'name'=> 'Cedric Lolilol',
                'email'=> 'cedric@gmail.com',
                'phone_number'=> '222 222 2222',
            ]

        ]
        );
    }
}