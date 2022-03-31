@extends('master')

@section('title', $songs->name)

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
    <h2 class="d-flex justify-content-center text-white">{{$songs->name}}</h2>
@stop

@section('content')
<div class="text-white d-flex justify-content-center">                     
            <div class="col-4">
                <div class="songDetail mt-2 pl-5">
                    <img src="{{$songs->img}}" class="mt-2 mb-2">
                        <h3>Artist(s): {{ $songs->artist }} </h3>
                        <p>Song name: {{ $songs->name }}</p>
                        <p>Duration:    {{$songs->duration}}</p>
                        <p>Genre: {{ $songs->genre }}</p>                                                  
                </div>
            </div>       
    </div>
</div>

@stop