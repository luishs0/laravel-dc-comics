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

            <div class="d-flex justify-content-between">
                <a class="btn btn-warning mb-3" href="{{ route('comics.edit', $comic->id) }}">Edit</a>

                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>

    </section>

@endsection
