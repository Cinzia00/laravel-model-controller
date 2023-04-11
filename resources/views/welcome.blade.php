<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel-model-controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <div class="container py-5">
            <h2 class="text-center text-light py-4">MOVIES</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($movies as $movie)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->original_title}}</p>
                            <p class="card-text">{{$movie->nationality}}</p>
                            <p class="card-text">Anno: {{$movie->date}}</p>
                            <p class="card-text">Voto: {{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </main>
</body>
</html>