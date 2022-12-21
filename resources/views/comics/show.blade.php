@extends('layouts.app')

@section('title', $comic->title)

@section('content')

    <section>
        <h1>{{ $comic->title }}</h1>
    </section>

@endsection
