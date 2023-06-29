@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                @foreach ($movie as $film)
                <div class="film-card card">
                   <h1>{{ $film->title }}</h1>
                   <h3>{{ $film->original_title }}</h3>
                   <p>{{ $film->vote }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
