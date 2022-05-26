@extends('layout.app')

@section('edit')
    <div class="container">
        <h1 class="text-center text-uppercase mt-5">modifica fumetto</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method='post'>
            @csrf


            @method('PUT')
            <div class="form-floating mb-3 mt-5">
                <input type="text" name="title" value="{{ $comic->title }}" class="form-control" id="titolo"
                    placeholder="Titolo">
                <label for="titolo">Titolo</label>
            </div>
            <div class="form-floating mb-3">
                <textarea type="text" class="form-control" name="description" value= {{ $comic->description }} placeholder="Description"
                    id="floatingTextarea2" style="height: 250px"></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="thumb" value="{{ $comic->thumb }}" class="form-control" id="floatingPassword"
                    placeholder="Image">
                <label for="floatingPassword">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="price" value="{{ $comic->price }}" class="form-control" id="floatingPassword"
                    placeholder="Price">
                <label for="floatingPassword">Price</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="series" value="{{ $comic->series }}" class="form-control" id="floatingPassword"
                    placeholder="Series">
                <label for="floatingPassword">Series</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="sale_date" value="{{ $comic->sale_date }}" class="form-control"
                    id="floatingPassword" placeholder="Sale Date YYYY-MM-DD">
                <label for="floatingPassword">Sale Date YYYY-MM-DD</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="type" value="{{ $comic->type }}" class="form-control" id="floatingPassword"
                    placeholder="Type">
                <label for="floatingPassword">Type</label>
            </div>


            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
