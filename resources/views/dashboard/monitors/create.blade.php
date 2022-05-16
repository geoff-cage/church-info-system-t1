@extends('layouts.app')

@section('content')
    <h1>Create Region Monitor</h1>


    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url('img/contact-bk.jpg');">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-12 text-white">
                    <h2 class="font-weight-bold text-center" x-text="eng ? 'Text Us': 'Tutumie ujumbe'"></h2>
                    <p class="my-4 text-center"
                        x-text="eng ? 'Sending us your details will allow us to start chatting with you.' : 'Kututumia maelezo yako kutaturuhusu kuanza kupiga gumzo nawe.'">
                    </p>
                    <br>
                    <form action="/storemonitors" method="POST">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-12">
                                <input type="text" name="kuhani_mkuu_code"
                                    placeholder="monitor_code" class="form-control"
                                    id=""> <br>
                                <input type="text" name="jina"
                                    placeholder="jina" class="form-control"
                                    id=""> <br>
                                <input type="text" name="mawasiliano"
                                    placeholder="mawasiliano" class="form-control"
                                    id=""> <br>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <button type="submit" style="padding: 10px 60px; background: #3742a5"
                                class="btn text-white font-weight-bold my-3">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection