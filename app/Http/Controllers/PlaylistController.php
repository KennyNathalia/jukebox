<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\PlaylistSong;
use App\Models\Song;
use App\Models\Genre;
use Validator;
use Auth;


class PlaylistController extends Controller
{
    public function index()
    {
        //gets the playlists and songs
        $playlists = Playlist::get();
        $songs = Song::get();
        
        return view('playlist', ['playlists' => $playlists],  ['songs' => $songs]);
    }

    public function create(Request $request){      
        //validates the request  
        $this->validate(request(), [
            'playlistName' => 'required',  
        ]);
        
        //gets the playlist name and retrieves the user id
        $pname = $request->input('playlistName');
        $user_id = $request->user()->id;

        //gets the songs from the request 
        $songs = $request->input('song');
        
        //makes and playlist object based on the playlist model
        $playlist = Playlist::create(
            ['name' => $pname, 'user_id' => $user_id]
        );

        //attaches the user chosen songs to the playlist
        $playlist->songs()->attach($songs);

        return redirect('/playlist');
    }

    public function save(Request $request){
        //Automatically makes a name for the playlist based on the date
        $name = date('Y-m-d H:i:s').'_Queue';

        //counts the songs that were in the session
        $totalsongs = count(session('songqueue'));
        $user_id = $request->user()->id;

        $playlist_id = Playlist::insertGetId(
            ['name' => $name, 'user_id' => $user_id]
        );

        $p=0;

        for ($x = 0; $x < $totalsongs; $x++) {
            PlaylistSong::create(['playlist_id' => $playlist_id, 'song_id' => session('songqueue')[$p]['id']]);

            $p = $p+1;
        }   
        
        return $this->playlistName($playlist_id);

    }

    public function playlistName($id){
        //gets playlist name
        $name = Playlist::where('id',$id)->get();
        return view('playlist_name', [
            'playlist_id' => $id,
            'name' => $name,
        ]);
       
    }

    public function newName(Request $request){
        //validates the request
        $this->validate(request(), [
            'playlistName' => 'required',
            
        ]);
        
        //gets the user and the playlist and updates the playlist name
        Playlist::where('user_id', $request->user()->id)->where('id', $request->playlist_id)->update(['name' => $request->input('playlistName')]);

        return redirect('/playlist');              
    }

    public function detail($id){
        //gets the playlist id
        $playlist = Playlist::findOrFail($id);
        $songs = Song::get();

        return view('playlist_detail', ['playlist' => $playlist], ['songs' => $songs]);
    }


    public function delete($id){
        //deletes the Playlist
        Playlist::where('id',$id)->delete();

        //deletes the songs within the playlist
        PlaylistSong::where('playlist_id',$id)->delete();

        return redirect('/playlist');
    }

    public function addSongToPlaylist($id, $songId){
        //gets playlist id and attaches the chosen song to the playlist
        $playlist = Playlist::find($id);
        $playlist->songs()->attach($songId);

        return redirect('/playlist');
    }

    public function removeSong($id, $songId){
        //gets playlist id and detaches the chosen song to the playlist
        $playlist = Playlist::find($id);
        $playlist->songs()->detach($songId);

        return redirect('/playlist');
    }
}
