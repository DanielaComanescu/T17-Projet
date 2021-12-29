<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Option;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            MakeSeeder::class,
            CarSeeder::class,
            CommandSeeder::class,
            OptionSeeder::class,
            // PivotSeeder::class,
        ]);
        $option = Option::all();
        Car::all()->each(function ($car) use ($option) { 
            $car->options()->attach(
                $option->random(rand(2, 4))->pluck('id')->toArray()
            ); 
        });
    }
}
