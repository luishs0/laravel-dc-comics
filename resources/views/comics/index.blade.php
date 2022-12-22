@extends('layouts.app')

@section('title', 'Comics')

@section('content')

    {{-- GRID --}}
    <div class="container-grid p-5">
        <div class="container">
            <div class="row">

                @foreach ($comics as $comic)
                    <div class="col-6 col-sm-2 mt-4">
                        <div class="img-grid">
                            <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->thumb }}" alt=""></a>
                        </div>
                        <div class="text-grid d-flex justify-content-between">
                            <a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }}</a>
                            <a class="edit-btn" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- /GRID --}}

@endsection
