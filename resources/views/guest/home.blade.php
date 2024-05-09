@extends('layout.app')

@section('content')
    <div class="p-5 mb-4 bg-dark text-light ">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Custom jumbotron</h1>
            <p class="col-md-8 fs-4">
                Using a series of utilities, you can create this jumbotron, just
                like the one in previous versions of Bootstrap. Check out the
                examples below for how you can remix and restyle it to your liking.
            </p>
            <button class="btn btn-primary btn-lg" type="button">
                Example button
            </button>
        </div>
    </div>


    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">{{ $movie->title }}</div>
                            <div class="card-subtitle">{{ $movie->original_title }} </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <h3>I'm not film, sorry!! 😭😭</h3>
                </div>
            @endforelse
        </div>
    </div>
@endsection
