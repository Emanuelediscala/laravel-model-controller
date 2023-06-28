@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                @foreach ($movies as $movie)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">{{$movie->nationality}}</p>
                        <p class="card-text">{{$movie->date}}</p>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

</div>
@endsection