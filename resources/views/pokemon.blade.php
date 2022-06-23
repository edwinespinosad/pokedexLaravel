<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-dark">

    <nav class="navbar bg-secondary mb-5">
        <div class="container-fluid">
            <a class="text-white fs-2" href="{{route('pokemon')}}">Pokedex</a>
        </div>
    </nav>
    <div class="container text-center">
        <div class="card">
            <img id="imgPokemon" class="card-img-top" alt="..." src={{$pokemon->sprites->front_default}}>
            <div class="card-body">
                <h5 class="card-title" id="nomPokemon">
                    {{ $pokemon->name }}
                </h5>
            </div>
        </div>

        <div class="text-center">
            <a class="btn btn-primary mt-5" href="{{route('pokemon')}}">Mostrar Pokemon</a>
            <a class="btn btn-warning mt-5" href="{{route('show')}}">Mostrar Pokemones Guardados</a>
        </div>
    </div>
    @php
    header("Refresh:30");
    @endphp
</body>

</html>