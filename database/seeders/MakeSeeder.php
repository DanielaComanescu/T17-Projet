<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('makes')->insert([
            ['name'=> 'Renault'],
            ['name'=> 'Peugeot'],
            ['name'=> 'BMW'],
            ['name'=> 'Hyundai'],
            ['name'=> 'Telsa'],
            ['name'=> 'Nissan'],
            ['name'=> 'Ford']
        ]);
    }
}
