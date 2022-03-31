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
    //runs seeders
    {
        $this->call([
            GenreSeeder::class,
            SongSeeder::class,
            //UserSeeder::class,
        ]);
    }
}
