<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_option')->insert([
            [
                'car_id'=>1,
                'option_id'=>2
            ],
            [
                'car_id'=>1,
                'option_id'=>3
            ],
            [
                'car_id'=>2,
                'option_id'=>4
            ],
            [
                'car_id'=>3,
                'option_id'=>5
            ]
        ]
        );
    }
}
