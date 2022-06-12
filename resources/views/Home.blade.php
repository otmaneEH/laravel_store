@extends('master.layout')

@section('titre')
    Home
@endsection
@section('style')
    <style>
        .container {
            margin-top: 100px;
        }

        body {
            background-color: #f5c2c2;
        }
    </style>
@endsection
@section('content')
    <div class="row">

        @foreach ($post as $item)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['title'] }}</h5>
                    <p class="card-text">{{ $item['body'] }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div></div>
        @endforeach
    </div>



    <h1>Home</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Quisquam, quidem.
    @endsection
