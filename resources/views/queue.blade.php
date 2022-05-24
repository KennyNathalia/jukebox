@extends('master')

@section('title', 'Queue')

@section('navbar')
    @parent

    <h1 class="d-flex justify-content-center mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" color="white" width="30" height="30" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
          </svg>
    </h1>
    <h2 class="d-flex justify-content-center text-white">Queue:</h2>
@stop    

@section('content')
    <div class="queueButtons">
        <a class="btn btn-secondary" href="/playlist/save" role="button">Save this queue</a>
        <a class="btn btn-secondary" href="/queue/clear" role="button">Clear Queue</a>
    </div>

    @if($queue != null)
        <div class="text-center">
            <h3 class="text-white">Total length: {{$queueTime['minute']. ' minutes and ' . $queueTime['second']. ' seconds'}}</h3>
        </div>
    @endif

    @if($queue != null)
    @foreach($queue as $key => $song)
    <ul>    
        <div class="songDetail text-white">
        <img src={{$song->img}}>
            <li class="font-weight-bold mt-2">{{$song->name}}</li>
            <li>{{$song->artist}}</li>
            <li>{{$song->duration}}</li>
            <li>{{$song->genre}}</li> 
    

            <a class="btn btn-secondary addSong" href="/queue/delete/{{$song->id}}" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                </svg>
            </a>
        </div>
        
    </ul>
    @endforeach
    @endif
    
@stop