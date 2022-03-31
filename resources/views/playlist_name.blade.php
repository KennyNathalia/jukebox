@extends('master')

@section('title', 'Edit Playlist')

@section('navbar')
    @parent
    <h2 class="d-flex justify-content-center text-white mt-2">Give your playlist a name:</h2>
@stop

@section('content')
<div class="">
    <form method="post" action="{{ url('/playlist/new') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="playlistName" class="text-white">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-secondary">Make Playlist</button>
    </form>
</div>

@stop