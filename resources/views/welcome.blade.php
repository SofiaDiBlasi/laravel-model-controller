@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                @foreach ($movie as $film)
                    {{ $film['title'] }}
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
