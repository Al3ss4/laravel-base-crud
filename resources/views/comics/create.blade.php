@extends('layout.app')


@section('new')
    <div class="container">
        <h1 class="text-center text-uppercase mt-5">crea nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method='post'>
            @csrf

            <div class="form-floating mb-3 mt-5">
                <input type="text" name="title" class="form-control" id="titolo" placeholder="Titolo">
                <label for="titolo">Titolo</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="thumb" class="form-control" id="floatingPassword" placeholder="Image">
                <label for="floatingPassword">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="price"  class="form-control" id="floatingPassword" placeholder="Price">
                <label for="floatingPassword">Price</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="series"  class="form-control" id="floatingPassword" placeholder="Series">
                <label for="floatingPassword">Series</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="sale_date"  class="form-control" id="floatingPassword" placeholder="Sale Date YYYY-MM-DD">
                <label for="floatingPassword">Sale Date YYYY-MM-DD</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="type"  class="form-control" id="floatingPassword" placeholder="Type">
                <label for="floatingPassword">Type</label>
            </div>


            <button type="submit" class="btn btn-success">Aggiungi</button>
        </form>
    </div>
@endsection
