@extends('layout.app')

@section('title', 'comics')

@section('content')

    {{-- @dump($comics) --}}
    <div class="container-fluid">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di Uscita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col" class="text-center">Dettagli</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->price }} $ </td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Visualizza</a>
                            <a href="{{ route('comics.create', $comic->id) }}" class="btn btn-success">Nuovo</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method='post'>
                                @csrf


                                @method('DELETE')
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Elimina
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Stai per eliminare il
                                                    fumetto!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Attenzione! Cliccando su Elimina eliminerai definitivamente il fumetto!!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Annulla</button>
                                                <button type="submit" class="btn btn-danger">Elimina</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
