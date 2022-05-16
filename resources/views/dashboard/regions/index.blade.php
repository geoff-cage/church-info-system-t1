@extends('layouts.app')

@section('content')
    <h1>Regions</h1>

    @if(count($regions) > 1)
        @foreach ($regions as $region)
            <h3><a href="/dashboard/regions/{{$region->id}}">{{$region->jina}}</a></h3>
        @endforeach
    @else
        <p> No Regions found</p>        
    @endif
@endsection