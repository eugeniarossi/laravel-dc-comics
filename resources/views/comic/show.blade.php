@extends('layout.app')

@section('page.title')
<div class="container my-3">
   {{ $comic->title }}
</div>
@endsection

@section('page.main')

<div class="container">
    <div class="card mt-5">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comic->series }}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comic->type }}</h6>
            <p class="card-text">{{ $comic->description }}</p>
            <p class="card-text">{{ $comic->artists }}</p>
            <p class="card-text">{{ $comic->writers }}</p>
            <p class="card-text">Release date: {{ $comic->sale_date }}</p>
        </div>
        <div class="card-footer text-body-secondary">
            {{ $comic->price }}
        </div>
    </div>
</div>
<div class="container my-3">
    <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Back to list</a>
</div>


@endsection