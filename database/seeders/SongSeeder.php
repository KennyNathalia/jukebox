<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Song;


class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //Pop Songs
        Song::create([
            'name' => "Don't Stop 'Til You Get Enough",
            'artist' => 'Michael Jackson',
            'duration' => '00:06:05',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2Fa221a950eb4132abcfefa6424e80bdb6.1000x1000x1.jpg"
        ]);

        Song::create([
            'name' => "Less Than Zero",
            'artist' => 'The Weeknd',
            'duration' => '00:03:31',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2Ff15065ef66cd717c267d3f2e37313bc1.1000x1000x1.jpg"
        ]);

        Song::create([
            'name' => "When I Was Your Man",
            'artist' => 'Bruno Mars',
            'duration' => '00:03:33',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F2e1e1ea46235d86a0ba541a1c30b3397.1000x1000x1.jpg"
        ]);

        Song::create([
            'name' => "Redbone",
            'artist' => 'Childish Gambino',
            'duration' => '00:05:27',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2Fa8bd82fe1b5ae6861aea0c2b65b8b333.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "Meet Me Halfway",
            'artist' => 'Black Eyed Peas',
            'duration' => '00:04:49',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F2555f8587c58b5dc02de876c5a6c09ad.300x300x1.jpg"
        ]);

        //Hip-Hop songs
        Song::create([
            'name' => "Walkin",
            'artist' => 'Denzel Curry',
            'duration' => '00:04:39',
            'genre' => 'Hip-Hop',
            'img' => "https://t2.genius.com/unsafe/386x386/https%3A%2F%2Fimages.genius.com%2Ff186ad9d396e2f3c29b17d4ec30b34b9.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "m.A.A.d city",
            'artist' => 'Kendrick Lamar',
            'duration' => '00:05:51',
            'genre' => 'Hip-Hop',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2Fc129d5d114d2cd2303d72e073746a5db.1000x1000x1.jpg"
        ]);

        Song::create([
            'name' => "I Wonder",
            'artist' => 'Kanye West',
            'duration' => '00:04:04',
            'genre' => 'Hip-Hop',
            'img' => "https://t2.genius.com/unsafe/399x399/https%3A%2F%2Fimages.genius.com%2Fb9d6cf24ceb76fa5d8ebf02569e16e2f.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "Excuse Me",
            'artist' => 'A$AP Rocky',
            'duration' => '00:03:57',
            'genre' => 'Hip-Hop',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2Fd76357785582c6a64b73649ee28407cf.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "pushin P",
            'artist' => 'Gunna',
            'duration' => '00:02:16',
            'genre' => 'Hip-Hop',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F1abca3229e327f687f4aef3615fd6ebb.1000x1000x1.png"
        ]);

        //Alternative songs
        Song::create([
            'name' => "Feel Good Inc.",
            'artist' => 'Gorillaz',
            'duration' => '00:03:42',
            'genre' => 'Alternative',
            'img' => "https://t2.genius.com/unsafe/405x405/https%3A%2F%2Fimages.genius.com%2F1c1be607b75eb6b3f88686b16b073cad.1000x1000x1.jpg"
        ]);

        Song::create([
            'name' => "Them Changes",
            'artist' => 'Thundercat',
            'duration' => '00:02:59',
            'genre' => 'Alternative',
            'img' => "https://t2.genius.com/unsafe/408x408/https%3A%2F%2Fimages.genius.com%2F466b18a3762737c2a3454406b02f22d4.1000x1000x1.jpg"
        ]);

        Song::create([
            'name' => "SLOW DANCING IN THE DARK",
            'artist' => 'Joji',
            'duration' => '00:03:29',
            'genre' => 'Alternative',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F4e80f6db69b69e16924ed12981b59a0a.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "Sofia",
            'artist' => 'Clairo',
            'duration' => '00:03:08',
            'genre' => 'Alternative',
            'img' => "https://t2.genius.com/unsafe/294x294/https%3A%2F%2Fimages.genius.com%2F08dcb11c5d99d150b17b92a5e0f1f8b4.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "Chamber Of Reflection",
            'artist' => 'Mac Demarco',
            'duration' => '00:03:52',
            'genre' => 'Alternative',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2Fb524207a5c6f9434919cbc1c22c7d0e6.800x800x1.jpg"
        ]);

        //Soul music
        Song::create([
            'name' => "O-o-h Child",
            'artist' => 'The Five Starsteps',
            'duration' => '00:03:18',
            'genre' => 'Soul',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2Fa3995bce879ce74d2bd44473e20b50b8.560x560x1.jpg"
        ]);

        Song::create([
            'name' => "I'll Be There",
            'artist' => 'The Jackson 5',
            'duration' => '00:04:00',
            'genre' => 'Soul',
            'img' => "https://t2.genius.com/unsafe/409x390/https%3A%2F%2Fimages.genius.com%2F27df09ef2fca2c3d44bd857480010ace.1000x952x1.jpg"
        ]);

        Song::create([
            'name' => "Kiss of Life",
            'artist' => 'Sada',
            'duration' => '00:04:11',
            'genre' => 'Soul',
            'img' => "https://t2.genius.com/unsafe/343x343/https%3A%2F%2Fimages.genius.com%2F0aa62489d2ad9ca23081e3dace20d028.596x596x1.jpg"
        ]);

        Song::create([
            'name' => "Love Train",
            'artist' => "The O'Jays",
            'duration' => '00:02:59',
            'genre' => 'Soul',
            'img' => "https://t2.genius.com/unsafe/394x391/https%3A%2F%2Fimages.genius.com%2F1d40d680b76a8069bb03806feb41e07b.600x595x1.jpg"
        ]);

        Song::create([
            'name' => "Strawberry Letter 23",
            'artist' => "Shuggie Otis",
            'duration' => '00:04:00',
            'genre' => 'Soul',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F8e278b90ab4031ea34b92d3221b5b3a8.600x600x1.jpg"
        ]);

        //R&B Songs
        Song::create([
            'name' => "Got To Be Real",
            'artist' => "Cheryl Lynn",
            'duration' => '00:03:42',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/409x411/https%3A%2F%2Fimages.genius.com%2F85c8e29e70c98d3c632df2b8d684ebb7.600x602x1.jpg"
        ]);

        Song::create([
            'name' => "Rock The Boat",
            'artist' => "Aaliyah",
            'duration' => '00:04:35',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/404x404/https%3A%2F%2Fimages.genius.com%2Fb3e9944f58677a455b712faa1f99e413.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "Naughty Girl",
            'artist' => "Beyoncé",
            'duration' => '00:03:29',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/397x397/https%3A%2F%2Fimages.genius.com%2Fba87a7db41e7ff0f115ff4c9e0287f5e.1000x1000x1.jpg"
        ]);

        Song::create([
            'name' => "Best I Ever Had",
            'artist' => "Drake",
            'duration' => '00:04:19',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/405x403/https%3A%2F%2Fimages.rapgenius.com%2F990859305960de2dc89c3835831fb513.680x676x1.jpg"
        ]);

        Song::create([
            'name' => "Watcha Say",
            'artist' => "Jason Derulo",
            'duration' => '00:03:41',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F27bd35b63c4f142f45a8b5ef7ce0cfdb.1000x1000x1.jpg"
        ]);
    }
}

