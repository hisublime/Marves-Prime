<?php

namespace Database\Seeders;

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
        $this->call(RakorSeeder::class);
        $this->call(ProgramKerjaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(NotifikasiSeeder::class);
        $this->call(SidangSeeder::class);
        $this->call(RencanaAksiSeeder::class);
        $this->call(TurenSeeder::class);
        $this->call(KegiatanSeeder::class);
        $this->call(CatatanSeeder::class);
        $this->call(PenggunaSeeder::class);
    }
}
