<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;
use App\Models\Song;
use App\Classes\Playlist;


class SongController extends Controller
{
    public function index()
    {
        //gets all songs
        $songs = Song::get();
        
        return view('home', ['songs' => $songs]); 
    }

    public function songDetail($id)
    {
        //gets the id of a song
        $songs = Song::findOrFail($id);
        
        return view('song_detail', ['songs' => $songs]);
        
    }

    public function update()
    //shows specific songs depending on which genre the user choses on the home page
    {
        if($_GET['sort'] == "all"){
            return redirect('/');
        }

        if($_GET['sort'] == "pop"){
            $songs = DB::table('songs')->where('genre', 'pop')->get();

            return view('home', [
                'songs' => $songs
            ]);
        }

        if($_GET['sort'] == "hip-hop"){
            $songs = DB::table('songs')->where('genre', 'hip-hop')->get();

            return view('home', [
                'songs' => $songs
            ]);
        }

        if($_GET['sort'] == "alternative"){
            $songs = DB::table('songs')->where('genre', 'alternative')->get();

            return view('home', [
                'songs' => $songs
            ]);
        }

        if($_GET['sort'] == "soul"){
            $songs = DB::table('songs')->where('genre', 'soul')->get();

            return view('home', [
                'songs' => $songs
            ]);
        }

        if($_GET['sort'] == "r&b"){
            $songs = DB::table('songs')->where('genre', 'r&b')->get();

            return view('home', [
                'songs' => $songs
            ]);
        }
    }    
}
