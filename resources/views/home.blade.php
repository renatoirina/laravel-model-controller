@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-4 ml-5" style="width: 12rem; height: auto;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <img src="{{ $movie->image }}" class="card-img-top" alt="image" style="height: 10rem;">
                            <p class="card-text">Original title: {{ $movie->original_title }}</p>
                            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                            <p class="card-text"><small class="text-muted">Year: {{ $movie->date }}</small></p>
                            <p class="card-text"><small class="text-muted">Vote: {{ $movie->vote }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>

@endsection