<?php 
    
    namespace App\Classes;
    use Illuminate\Http\Request;

    class Playlist{
        public function showQueue(Request $request, $data)
        {
            $data = $request->session()->all('songqueue');
            //session(['songqueue' => request()->all()]);
        }

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

        public function clearQueue(){
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
    
            //foreach song in the queue
            foreach($songQueue as $song){
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