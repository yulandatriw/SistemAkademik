<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "iddosen" => $this->faker->numerify(),
            "nama" => $this->faker->name(),
            "alamat" => $this->faker->address(),
            "telp" => $this->faker->numerify(),
            "email" => $this->faker->email(),
        ];
    }
}
