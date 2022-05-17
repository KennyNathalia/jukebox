<?php 
    
    namespace App\Classes;
    use Illuminate\Http\Request;

    class Playlist{
        private $sessionSongs;
        private $request;

        public function __construct(Request $request){
            $this->request = $request;

            if ($this->request->session()->has('songQueue')) {
                $this->sessionSongs = $this->request->session()->get('songQueue');
            }else{
                $this->sessionSongs = [];
            }
        }

        public function syncSession(){
            $this->request->session()->put('songQueue', $this->sessionSongs);
        }

        public function getAllSongs()
        {   
            return $this->sessionSongs;
        }

        public function addSong($songId){
            
            syncSession();
        }

        public function removeSong($songId){
            
            syncSession();
        }

        public function clearPlaylist(){
            session()->forget('songqueue');
        }

        public function convertTime(){
            //variables
            $minutes = 0;
            $seconds = 0;
            $extraMinutes = 0;
    
            //checks if session exists
            if(session()->has('songqueue')){
                $songQueue = session('songqueue');
            }else{
                $songQueue = session();
            }

            dd($songQueue);
    
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