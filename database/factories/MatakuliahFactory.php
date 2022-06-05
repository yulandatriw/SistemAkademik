<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatakuliahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matakuliah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "idmakul" => $this->faker->numerify(),
            "namamakul" => $this->faker->name(),
            "semester" => $this->faker->numerify(),
            "sks" => $this->faker->numerify(),
            "keterangan" => $this->faker->name(),
        ];
    }
}
