@extends('master')

@section('title', 'Genres')

@section('navbar')
    @parent
@stop

@section('content')
    @foreach($genre as $key => $data)
    <tr>    
        <th>{{$data->name}}</th>             
    </tr>
    @endforeach
@stop