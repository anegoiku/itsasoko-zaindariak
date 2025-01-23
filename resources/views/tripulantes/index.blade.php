<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="itsasoko-zaindariak/resources/css/app.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AITA MARI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('tripulantes.index')}}">Tripulazioa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('bidaiak.index')}}">Bidaiak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('medikuak.index')}}">Medikuak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>TRIPULATZAILEAK</h1>
    <a href="{{route('tripulantes.formulario')}}" class="btn btn-primary">CREAR</a>
    <br><br>
    <ul>
        @foreach ($tripulantes as $tripulante)
        <ul class="list-group">
            <li class="list-group-item"><a href="{{route('tripulantes.show', $tripulante->id)}}">{{$tripulante->izena}} -- {{$tripulante->abizena}} -- {{$tripulante->rola}}</a>
                <a href="{{route('tripulantes.edit', $tripulante->id)}}" class="btn btn-success">EDITAR</a>
                <form method="POST" action="{{route('tripulantes.destroy', $tripulante->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger">BORRAR</button>
                </form>
            </li>
        </ul>
        @endforeach
    </ul>
</body>

</html>