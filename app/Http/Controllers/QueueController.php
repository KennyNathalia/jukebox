<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Classes\Playlist;

class QueueController extends Controller
{
    private $playlist;

    public function addSong($id){
        $songId = Song::findOrFail($id);
        $playlist = new Playlist();
        $playlist->addSong($songId);
        return redirect('/queue');   
    }

    public function clearQueue(){
        $playlist = new Playlist();
        $playlist->clearPlaylist();
        return redirect('/'); 
    }

    public function removeSong($songId){
        $playlist = new Playlist();
        $playlist->removeSong($songId);
        return redirect('/queue');
    
    }

    public function queue(){
        $playlist = new Playlist();
        //returns view and total time of the queue
        return view('queue', [
            'queue' => session('songqueue'),
            'queueTime' => $playlist->convertTime()
        ]);
    }

    
}