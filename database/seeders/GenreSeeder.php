<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;


class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Genre::create([
            'name' => 'Hip-Hop'
        ]);

        Genre::create([
            'name' => 'Pop'
        ]);
        Genre::create([
            'name' => 'Alternative'
        ]);
        Genre::create([
            'name' => 'Soul'
        ]);
        Genre::create([
            'name' => 'R&B'
        ]);
    }
}

