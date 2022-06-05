<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nim" => $this->faker->numerify(),
            "nama" => $this->faker->name(),
            "telp" => $this->faker->numerify(),
            "email" => $this->faker->email(),
            "tmp_lahir" => $this->faker->city(),
            "tgl_lahir" => $this->faker->date(),
            "alamat" => $this->faker->address(),
        ];
    }
}
