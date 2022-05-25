@extends('layout.app')

@section('title', 'Home')

@section('content')

    @dump($comics)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data di Uscita</th>
                <th scope="col">Tipo</th>
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

                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
