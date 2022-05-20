@extends('master')

@section('title', 'Home')

@section('navbar')
    @parent
    <h1 class="d-flex justify-content-center mt-2">
        <svg color="white" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-boombox-fill" viewBox="0 0 16 16">
            <path d="M14.5.5a.5.5 0 0 0-1 0V2H1a1 1 0 0 0-1 1v2h16V3a1 1 0 0 0-1-1h-.5V.5ZM2.5 4a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Zm7.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm1.5.5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Zm-7-1h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1Zm-2 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm.5-1.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm6.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm0-1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z"/>
            <path d="M16 6H0v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V6ZM4.5 13a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Zm7 0a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z"/>
          </svg>
    </h1>
    <h2 class="d-flex justify-content-center text-white">Jukebox!</h2>
@stop

@section('content')
    <div class="dropdown">
        <form action="{{ route('home.genre') }}" method="get">
                <svg color="white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                  </svg>

                <select class="" name="sort">
                    <option value="all">All</option> 
                    <option value="pop">Pop</option> 
                    <option value="hip-hop">Hip-Hop</option>
                    <option value="alternative">Alternative</option> 
                    <option value="soul">Soul</option>
                    <option value="r&b">R&B</option>
                </select>
            <input type="submit" value="Go!">
        </form>
    </div>
    
    @foreach($songs as $song)
    <ul>    
        <div class="songDetail text-white">
        <img src={{$song->img}}>
            <li class="font-weight-bold mt-2"><a class="text-white" href="/song/detail/{{$song->id}}">{{$song->name}}</a></li>
            <li>{{$song->artist}}</li>
            <li>{{$song->duration}}</li>
            <li>{{$song->genre}}</li> 
            <li>
                <a class="btn btn-secondary addSong" href="/queue/add/{{$song->id}}" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </a>
            </li>
        </div>
    </ul>
    @endforeach

    <a href="#" class="top">Back to Top &#8593;</a>
@stop