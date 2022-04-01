@extends('master')

@section('title', $playlist->name)

@section('navbar')
    @parent
    <h1 class="d-flex justify-content-center mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" color="white" width="35" height="35" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
            <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
            <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
            <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
            <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
        </svg>
    </h1>
        <h2 class="d-flex justify-content-center text-white">{{$playlist->name}}</h2>
@stop

@section('content')
<div class="">
    <div class="row text-white">
        @foreach($playlist->songs as $song)                        
            <div class="col-4">
                <div class="songDetail mt-2 pl-5">
                    <img src="{{$song->img}}" class="mt-2 mb-2">
                        <h3>{{ $song->artist }} </h3>
                        <p>{{ $song->name }}</p>
                        <p>{{$song->duration}}</p>
                        <p>{{ $song->genre }}</p>
                        <a class="btn btn-danger" href="/playlist/remove/{{$playlist->id}}/{{$song->id}}">Remove this song</a>                                            
                </div>
            </div>       
        @endforeach
    </div>
</div>

<div>    
    <hr>
    <p>Add a song!</p>
</div>


<div>
    @foreach($songs as $song)
        <ul>
            <div class="songDetail text-white">
            <img src={{$song->img}}>
                
                <li class="font-weight-bold mt-2">{{$song->name}}</li>
                <li>{{$song->artist}}</li>
                <li>{{$song->duration}}</li>
                <li>{{$song->genre}}</li> 
                <li><a class="btn btn-success" href="/playlist/addsong/to/playlist/{{$playlist->id}}/{{$song->id}} ">Add this song</a></li>
            </div>
        </ul>
    @endforeach   
</div>

@stop