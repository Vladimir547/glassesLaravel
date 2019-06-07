<h2>
    {{$obj->name}}
</h2>
{!! $obj->body !!}
@if($obj->picture)
    <img src="{{asset('uploads/s_'.$obj->picture)}}">
@else
    <img src="{{asset('img/nophoto.png')}}">
@endif