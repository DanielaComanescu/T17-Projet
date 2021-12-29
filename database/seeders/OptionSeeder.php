<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            ['name'=> 'Climatisation'],
            ['name'=> 'GPS'],
            ['name'=> 'Sièges chauffants'],
            ['name'=> 'Toit panoramique'],
            ['name'=> 'Pilote automatique'],
            ['name'=> 'Caméra de recul'],
            ['name'=> 'Ordinateur de bord']
        ]);
    }
}