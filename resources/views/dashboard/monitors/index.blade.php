@extends('layouts.app')

@section('content')
    <h1>Region Monitors</h1> <br>
    <a href="/createmonitors" class="btn btn-light">Add Monitor</a>
    <br>

    @if(count($monitors) > 0)
        @foreach ($monitors as $monitor)
            <h3><a href="/showmonitors/{{$monitor->id}}">{{$monitor->jina}}</a></h3>
        @endforeach
        {{$monitors->links()}}
    @else
        <p> No Region Monitors found</p>        
    @endif
@endsection