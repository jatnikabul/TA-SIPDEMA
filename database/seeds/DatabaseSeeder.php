<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(KeramaianSeeder::class);
        $this->call(KelahiranSeeder::class);
        $this->call(SuratSkck::class);
        $this->call(SuratKematian::class);
        $this->call(SuratUsaha::class);
        $this->call(SuratTidakMampu::class);

    }
}
