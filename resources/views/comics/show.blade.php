@extends('layout.app')
@section('title', $comic['title'])

@section('detail')

    {{-- @dump($comic) --}}


    <div class="container">
        <h1 class="text-center text-uppercase mt-5">{{ $comic->title }}</h1>

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
        <button type="button" class="btn btn-primary"><a href="{{ route('comics.index') }}" class="link-light">Back
            </a></button>






            <form action="{{ route('comics.destroy', $comic->id) }}" method='post' class="mt-5">
                @csrf


                @method('DELETE')
                  <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Stai per eliminare il fumetto!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Attenzione! Cliccando su Elimina eliminerai definitivamente il fumetto!!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection
