@extends('layout.app')

@section('title', 'comics')

@section('content')

    {{-- @dump($comics) --}}
    <div class="container">
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
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Visualizza</a>
                            <a href="{{ route('comics.create', $comic->id) }}" class="btn btn-primary">Nuovo</a> <a
                                href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
