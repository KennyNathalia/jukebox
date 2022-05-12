<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Classes\Playlist;

class QueueController extends Controller
{
    private $playlist;

    public function addSong($id){
        //findOrFail if no results are found
        $song = Song::findOrFail($id);
        $playlist = new Playlist();
        $playlist->addSong($song);
        return redirect('/queue');   
    }

    public function clearQueue(){
        //clears queue by forgetting the queue
        $playlist = new Playlist();
        $playlist->clearQueue();
        return redirect('/queue'); 
    }

    public function removeSong($id){
        //removes song
        $playlist = new Playlist();
        $playlist->removeSong($id);
        return redirect('/queue');
    }

    public function queue(Request $request){
        $playlist = new Playlist();
        //returns view and total time of the queue
        return view('queue', [
            //'queue' => session('songqueue'),
            'queue' => $playlist->showQueue(),
            'queueTime' => $playlist->convertTime()
        ]);
    }

    // public function showQueue(Request $request, $id)
    // {
    //     $value = $request->session()->get('key');
 
    //     //
    // }
    
}