@extends('master')

@section('title', 'Playlist')

@section('navbar')
    @parent
    <h1 class="d-flex justify-content-center mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" color="white" width="30" height="30" fill="currentColor" class="bi bi-collection-play-fill" viewBox="0 0 16 16">
            <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
        </svg>
    </h1>
    
    <h2 class="d-flex justify-content-center text-white">Your playlists:</h2>
@stop

@section('content')

@if(Auth::user())
    <div class="songDetail text-white">
        @foreach(Auth::user()->playlists as $playlist)
            <div class="d-flex justify-content-center">
                <h1><a class="text-white" href="/playlist/detail/{{$playlist->id}}">{{$playlist->name}}</a></h1>
            </div>

            <div class="d-flex justify-content-center">
                <a class="btn btn-secondary" href="/playlist/editName/{{ $playlist->id }}">Change Playlist Name</a>
                <a class="btn btn-danger" href="/playlist/delete/{{ $playlist->id }}">Delete Playlist</a>
            </div>
        @endforeach
    </div>      
@endif

<div class="">
    <form method="post" action="{{ url('/playlist/create') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="playlistName" class="text-white">Create a playlist:</label>
            <input type="text" class="form-control" id="playlistName" name="playlistName" placeholder="Name" required>
        </div>

        <div class="">
            <button type="submit" class="btn btn-secondary">Make Playlist</button>
        </div>

        <p class="text-white text-center">Select the songs you want to add in the playlist by clicking the checkbox!</p>
        
    @foreach($songs as $song)
        <ul>
            <div class="songDetail text-white">
            <img src={{$song->img}}>
                <li class="font-weight-bold mt-2">{{$song->name}}</li>
                <li>{{$song->artist}}</li>
                <li>{{$song->duration}}</li>
                <li>{{$song->genre}}</li> 
                <li>
                    <div class="checkbox">
                        <input class="mt-2" type="checkbox" name="song[]" value="{{ $song->id }}" id="check{{ $song->id }}">
                    </div>
                </li>
            </div>
        </ul>
    @endforeach   

    </form>
</div>

<a href="#" class="top">Back to Top &#8593;</a>
        
@stop