<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;
use App\Models\Song;
use App\Classes\Playlist;


class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$songs = DB::table('songs')->get();

        $songs = Song::get();
        
        return view('home', ['songs' => $songs]);
        
    }

    public function songDetail($id)
    {
        $songs = Song::findOrFail($id);
        
        return view('song_detail', ['songs' => $songs]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        
    
}
