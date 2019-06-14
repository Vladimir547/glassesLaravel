@extends('layouts.base')

@section('content')

    <h1>{{$obj->name}}</h1>
    <iframe src="http://localhost:9090/chat.html?Name={{(Auth::guest())?'default':Auth::user()->name}}&Room={{$obj->name}}" class="my__frame"></iframe>
@endsection