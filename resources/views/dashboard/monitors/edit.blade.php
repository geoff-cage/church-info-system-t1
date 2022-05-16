@extends('layouts.app')

@section('content')
    
    <a href="/getmonitors" class="btn btn-light">Go Back</a>
    <br>
    <h1>Edit Monitor</h1>
    <br>
    <form action="/updatemonitors/{{$monitor->id}}" method="post">
    
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label for="">kuhani_mkuu_code</label>
        <input type="text" name="kuhani_mkuu_code" value="{{$monitor->kuhani_mkuu_code}}" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="">jina</label>
        <input type="text" name="jina" value="{{$monitor->jina}}" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="">mawasiliano</label>
        <input type="text" name="mawasiliano" value="{{$monitor->mawasiliano}}" class="form-control">
    </div>

    <div class="form-group mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

    </form>
@endsection