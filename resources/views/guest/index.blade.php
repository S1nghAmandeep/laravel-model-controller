@extends('layout.app')

@section('content')
    
<section>
    <div class="container">
        <div class="row">
            
                @forelse ($movies as $movie)
                <div class="col-4">
                   <h1>{{ $movie->title }}</h1>
                   <h3>{{ $movie->original_title }}</h3>
                   <h4>{{ $movie->nationality }}</h4>

                </div>
                @empty
                    non ci sono risultati
                @endforelse
        </div>
    </div>
</section>

@endsection