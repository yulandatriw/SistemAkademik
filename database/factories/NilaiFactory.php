<?php

namespace Database\Factories;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nilai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "id" => $this->faker->numerify(),
            "nim" => $this->faker->numerify(),
            "idmakul" => $this->faker->randomElement(["1", "2", "3", "4"]),
            "idthnajar" => $this->faker->randomElement(["2018", "2019", "2020", "2021"]),
            "idkelas" => $this->faker->randomElement(["A", "B", "C", "D"]),
            "uk1" => $this->faker->int(),
            "uk2" => $this->faker->int(),
            "uts" => $this->faker->int(),
            "uas" => $this->faker->int(),
        ];
    }
}
