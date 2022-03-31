@extends('master')

@section('title', 'Login')

@section('navbar')
    @parent
@stop

@section('content')
    <div class="">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
            </div>
        </form>
    </div>
@stop