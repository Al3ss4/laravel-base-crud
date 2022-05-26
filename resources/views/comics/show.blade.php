@extends('layout.app')
@section('title', $comic["title"])

@section('detail')

    {{-- @dump($comic) --}}


    <div class="container">


        <div class="card mb-3 mt-5" style="max-width: 1350px" ;>
            <div class="row g-0 d-flex flex-direction-center">
                <div class="col-2">
                    <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->thumb }}">
                </div>

                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title text-center m-3">{{ $comic->title }}</h5>
                        <p class="card-text ">{{ $comic->description }}</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
