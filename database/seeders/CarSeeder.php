<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Car::factory(100)->create();

        // DB::table('cars')->insert([
        // [
        //     'user_id'=> 1,
        //     'status'=> 'En vente', 
        //     'number_plate'=> 'XX-999-XX', 
        //     'make'=> 'Renault', 
        //     'model'=> 'Arkana', 
        //     'price'=> 35000,
        //     'kilometers'=> 10000, 
        //     'fuel_type'=> 'Essence', 
        //     'gearbox'=> 'Manuelle', 
        //     'power'=> '130 CV', 
        //     'registration_year'=> '2021', 
        //     'color'=> 'Orange', 
        //     'doors'=> 5, 
        //     'seats'=> 5, 
        //     'tc'=> '06/2021', 
        //     'last_check'=> '06/2021'
        // ],
        // [
        //     'user_id'=> 2,
        //     'status'=> 'Vendu', 
        //     'number_plate'=> 'YY-888-YY', 
        //     'make'=> 'Alfa-Romeo', 
        //     'model'=> 'Guiletta', 
        //     'price'=> 45000, 
        //     'kilometers'=> 3000, 
        //     'fuel_type'=> 'Electrique', 
        //     'gearbox'=> 'Automatique', 
        //     'power'=> '190 CV', 
        //     'registration_year'=> '2021', 
        //     'color'=> 'Noir', 
        //     'doors'=> 3, 
        //     'seats'=> 4, 
        //     'tc'=> '09/2021', 
        //     'last_check'=> '09/2021'
        // ],
        // [
        //     'user_id'=> 3,
        //     'status'=> 'En vente', 
        //     'number_plate'=> 'ZZ-777-ZZ', 
        //     'make'=> 'Tesla', 
        //     'model'=> 'Model 3', 
        //     'price'=> 36000, 
        //     'kilometers'=> 150, 
        //     'fuel_type'=> 'Electrique', 
        //     'gearbox'=> 'Automatique', 
        //     'power'=> '160 W', 
        //     'registration_year'=> '2020', 
        //     'color'=> 'Blanc', 
        //     'doors'=> 3, 
        //     'seats'=> 2, 
        //     'tc'=> '04/2021', 
        //     'last_check'=> '04/2021'
        // ]
        // ]);
    }
}