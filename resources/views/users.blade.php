@extends('layouts.base')

@section('content')

    <h1>Users</h1>
    @foreach($users as $one)
        <div class="user">
            <a href="{{asset('user/'.$one->id)}}" class="btn btn-success btn-block">
                {{$one->name}}
            </a>
        </div>
    @endforeach

    <p align="center">{!! $users->links() !!}</p>

@endsection