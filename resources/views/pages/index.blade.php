@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>

<p><a href="/getregions" class="btn btn-primary btn-lg" role="button">Regions</a>
    <br /> <br />
    <a href="/getmonitors" class="btn btn-primary btn-lg" role="button">Monitors</a></p>

@endsection