<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            DepartemenSeeder::class,
            PegawaiSeeder::class,
            ProyekSeeder::class,
            PekerjaProyekSeeder::class,
            MahasiswaSeeder::class,
            MatakuliahSeeder::class,
            KelasSeeder::class,
            NilaiSeeder::class,
        ]);
    }
}
