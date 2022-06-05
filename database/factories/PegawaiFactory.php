<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pegawai::class;

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
            "nik" => $this->faker->numerify(),
            // "id_dept" => $this->faker->randomElement(["EDP","MANREP","MARK","OPS","ENG","FIN","HRD"]) ,
            // "email" => $this->faker->email(),
            "tmp_lahir" => $this->faker->city(),
            "tgl_lahir" => $this->faker->date(),
            "alamat" => $this->faker->address(),
            // "jenkel" => $this->faker->randomElement(["0","1"]),
            // "goldar" => $this->faker->randomElement(["O","A","B","AB"]),
            // "agama" => $this->faker->randomElement(["Islam","Kristen","Katholik","Hindu","Budha","Konghucu"]),
            // "jabatan" => $this->faker->randomElement(["Dir","Wadir","Deputi","Staf"]),
            // "pernikahan" => $this->faker->randomElement(["0","1"]),
            // "kewarganegaraan" => $this->faker->randomElement(["WNI","WNA"]),  
            // "path_foto" => $this->faker->image(null, 640, 480),          
        ];
    }
}
