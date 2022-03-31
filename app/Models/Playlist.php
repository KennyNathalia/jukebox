<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;

class Playlist extends Model
{
    use HasFactory;

    protected $guarded = [];

    //gets all songs for the playlist page
    public function songs(){
        return $this->belongsToMany(Song::class, 'playlistsongs','playlist_id', 'song_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
