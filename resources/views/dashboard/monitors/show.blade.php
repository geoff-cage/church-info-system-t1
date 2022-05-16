@extends('layouts.app')

@section('content')
<a href="/getmonitors" class="btn btn-light">Go Back</a>
    <h1>Region Monitor</h1>

    <h3>{{$monitor->jina}}</h3>
    <div class="well">
        <p>{{$monitor->kuhani_mkuu_code}}</p>
        <p>{{$monitor->mawasiliano}}</p>
        <small>Written on {{$monitor->created_at}}</small>
    </div>
    <br>
    <a href="/editmonitors/{{$monitor->id}}" class="btn btn-primary">Edit</a>
    <br>
    <br>
    <form action="/deletemonitors/{{$monitor->id}}" method="post">
    @csrf
    @method('delete')
    <div class="form-group mb-3">
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
    </form>
@endsection