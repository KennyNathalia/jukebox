<?php 
    
    namespace App\Classes;
    use Illuminate\Http\Request;

    class SessionManagement{
        private $sessionSongs;
        private $request;

        //the construct runs when a queue is being made
        public function __construct(Request $request){
            $this->request = $request;

            //if the session from the session has songqueue
            if ($this->request->session()->has('songQueue')) {
                $this->sessionSongs = $this->request->session()->get('songQueue');
            }else{
                //if not, session songs is an empty array
                $this->sessionSongs = [];
            }
        }
        
        //syncs the session
        public function syncSession(){
            $this->request->session()->put('songQueue', $this->sessionSongs);
        }

        //gets all songs from the session and displays them
        public function getAllSongs()
        {   
            //returns the session songs array
            return $this->sessionSongs;
        }

        //adds song in the session from the home page
        public function addSong($songId){
            $this->request->session()->push('songQueue', $songId);
            
            //syncSession();
        }

        //removes song from the session
        public function removeSong($songId){
            if ($this->request->session('songQueue') != null){
                $this->request->session()->forget('songQueue.' .$songId);
            } 
            
            //syncSession();
        }

        //clears the whole playlist
        public function clearPlaylist(){
            $this->request->session()->forget('songQueue');

            //$this->syncSession();
        }

        //returns the total time from all the songs in the session
        public function convertTime(){
            //variables
            $minutes = 0;
            $seconds = 0;
            $extraMinutes = 0;
    
            //checks if session exists
            if(session()->has('songQueue')){
                $songQueue = session('songQueue');
            }else{
                $songQueue = session();
            }

            //dd($songQueue);
    
            //foreach song in the queue
            foreach($songQueue as $song){
                //dd($song);
                //Returns associative array with detailed info about given date/time
                $convertedTime = date_parse($song->duration);
                $minutes += $convertedTime['minute'];
                $seconds += $convertedTime['second'];
                //int div checks how many times it fits in the first given number
                $extraMinutes = intdiv($seconds, 60);
                $minutes += $extraMinutes;
                //returns the remaining seconds
                //100 : 60 = 40 because 60 can only fit in once in 100
                $seconds = $seconds % 60;
                
            }
    
            //returns minutes and seconds
            $time = [ 'minute' => $minutes,'second' => $seconds];
            return $time;
        }
    }