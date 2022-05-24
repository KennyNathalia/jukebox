<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Classes\SessionManagement;

class QueueController extends Controller
{
    private $playlist;

    public function addSong(Request $request, $id){
        $songId = Song::findOrFail($id);
        $playlist = new SessionManagement($request);
        $playlist->addSong($songId);
        return redirect('/queue');   
    }

    public function clearQueue(Request $request){
        $playlist = new SessionManagement($request);
        $playlist->clearPlaylist();
        return redirect('/'); 
    }

    public function removeSong(Request $request, $songId){
        $playlist = new SessionManagement($request);
        $playlist->removeSong($songId);
        return redirect('/queue');
    }

    public function queue(Request $request){
        $playlist = new SessionManagement($request);
        //returns view and total time of the queue
        return view('queue', [
            'queue' => $playlist->getAllSongs(),
            'queueTime' => $playlist->convertTime()
        ]);
    }
}