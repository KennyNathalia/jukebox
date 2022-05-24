<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Classes\Playlist;

class QueueController extends Controller
{
    private $playlist;

    public function addSong(Request $request, $id){
        $songId = Song::findOrFail($id);
        $playlist = new Playlist($request);
        $playlist->addSong($songId);
        return redirect('/queue');   
    }

    public function clearQueue(Request $request){
        $playlist = new Playlist($request);
        $playlist->clearPlaylist();
        return redirect('/'); 
    }

    public function removeSong(Request $request, $songId){
        $playlist = new Playlist($request);
        $playlist->removeSong($songId);
        return redirect('/queue');
    }

    public function queue(Request $request){
        $playlist = new Playlist($request);
        //returns view and total time of the queue
        return view('queue', [
            'queue' => $playlist->getAllSongs(),
            'queueTime' => $playlist->convertTime()
        ]);
    }
}