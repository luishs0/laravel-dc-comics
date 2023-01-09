@extends('layouts.app')

@section('title', 'New Comic')


@section('content')

    <section>
        <div class="container">
            <h3 class="text-center mt-4">Create a new comic</h3>

            <div class="row justify-content-center">
                <div class="col-7 mb-5">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title') }}">
                        </div>

                        <div class="mb-2">
                            <label for="thumb">Image</label>
                            <input type="text" class="form-control" id="thumb" name="thumb"
                                value="{{ old('thumb') }}">
                        </div>

                        <div class="mb-2">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type"
                                value="{{ old('type') }}">
                        </div>

                        <div class="mb-2">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{ old('price') }}">
                        </div>

                        <div class="mb-2">
                            <label for="series">Series</label>
                            <input type="text" class="form-control" id="series" name="series"
                                value="{{ old('series') }}">
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">Sale date</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date"
                                value="{{ old('sale_date') }}">
                        </div>

                        <div class="mb-2">
                            <label for="artists">Artists</label>
                            <input type="text" class="form-control" id="artists" name="artists"
                                value="{{ old('artists') }}">
                        </div>

                        <div class="mb-2">
                            <label for="writers">Writers</label>
                            <input type="text" class="form-control" id="writers" name="writers"
                                value="{{ old('writers') }}">
                        </div>

                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="10" value="{{ old('description') }}"></textarea>
                        </div>

                        <button class="btn btn-success" type="submit">Create</button>
                    </form>
                </div>

            </div>
    </section>

@endsection
