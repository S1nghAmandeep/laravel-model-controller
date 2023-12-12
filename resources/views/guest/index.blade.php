@extends('layout.app')

@section('content')
    
<section>
    <div class="container">
        <div class="row">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Titolo originale</th>
                        <th scope="col">Nazionalità</th>
                        <th scope="col">Data di uscità</th>
                        <th scope="col">Voto</th>
                      </tr>
                    </thead>
                @forelse ($movies as $movie)
                    <tbody>
                      <tr>
                        <th scope="row"></th>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->original_title }}</td>
                        <td>{{ $movie->nationality }}</td>
                        <td>{{ $movie->date}}</td>
                        <td>{{ $movie->vote }}</td>
                      </tr>
                @empty
                    non ci sono risultati
                @endforelse
            </tbody>
        </table>
        </div>
    </div>
</section>

@endsection