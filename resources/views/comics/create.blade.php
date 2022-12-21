@extends('layouts.app')

@section('title', 'New Comic')


@section('content')

    <section>
        <div class="container">
            <h3 class="text-center mt-4">Create a new comic</h3>

            <div class="row justify-content-center">
                <div class="col-7 mb-5">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="mb-2">
                            <label for="thumb">Image</label>
                            <input type="text" class="form-control" id="thumb" name="thumb">
                        </div>

                        <div class="mb-2">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>

                        <div class="mb-2">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>

                        <div class="mb-2">
                            <label for="series">Series</label>
                            <input type="text" class="form-control" id="series" name="series">
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">Sale date</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date">
                        </div>

                        <div class="mb-2">
                            <label for="artists">Artists</label>
                            <input type="text" class="form-control" id="artists" name="artists">
                        </div>

                        <div class="mb-2">
                            <label for="writers">Writers</label>
                            <input type="text" class="form-control" id="writers" name="writers">
                        </div>

                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                        </div>

                        <button class="btn btn-success" type="submit">Create</button>
                    </form>
                </div>

            </div>
    </section>

@endsection
