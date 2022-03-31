<?php 
    
    namespace App\Classes;
    
    class Playlist{
        public function addSong($song){
            if (session('songqueue') == null){
                session()->put('songqueue', []);
                session()->push('songqueue', $song);
            } else {
                session()->push('songqueue', $song);
            }
        }

        public function removeSong($index){
            if (session('songqueue') != null){
                session()->forget('songqueue.'.$index);
            } 
        }
    }