@extends('layouts.app')

@section('content')
    <div class="row d-flex row-cols-4">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->date }} {{ $movie->nationality }}</p>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
