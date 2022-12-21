@extends('layouts.app')

@section('title', $comic->title)

@section('content')

    <section class="show-section">
        <div class="container">
            <h1 class="mt-2 mb-2">{{ $comic->title }}</h1>
            <img src="{{ $comic->thumb }}" alt="">
            <p class="mt-3">Price: {{ $comic->price }} </p>
            <p>{{ $comic->series }} </p>
            <p>{{ $comic->sale_date }}</p>
            <p>Type: {{ $comic->type }} </p>
            <p>{{ $comic->description }}</p>
        </div>
    </section>

@endsection
