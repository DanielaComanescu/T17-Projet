<?php

namespace Database\Factories;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CarFactory extends Factory
{
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 3),
            'status' => $this->faker->randomElement(['En vente', 'Vendu', 'En cours de validation']),
            'number_plate' => $this->faker->regexify('[A-Z]{2}-[0-9]{3}-[A-Z]{2}'),
            'make_id' => $this->faker->numberBetween(1, 7),
            'model' => $this->faker->name(),
            'price' => $this->faker->numberBetween(7, 130)*1000 . ' €',
            'kilometers' => $this->faker->numberBetween(0, 500)*1000,
            'fuel_type' => $this->faker->randomElement(['Diesel', 'Essence', 'Electrique', 'Hybride']),
            'gearbox' => $this->faker->randomElement(['Manuelle', 'Automatique']),
            'power' => $this->faker->numberBetween(7, 13)*10,
            'registration_year' => $this->faker->numberBetween(2000, 2018),
            'color' => $this->faker->randomElement(['Noir', 'Bleu', 'Blanc', 'Rouge', 'Gris', 'Orange']),
            'seats' => $this->faker->randomElement(['2', '4', '5', '7']),
            'doors' => $this->faker->randomElement(['3', '5', '7']),
            'tc' => $this->faker->randomElement(['01/2019', '06/2018', '10/2019', '03/2020', '01/2020']),
            'last_check' => $this->faker->randomElement(['11/2021', '08/2021', '03/2020', '07/2020', '01/2021']),
        ];
    }
}
