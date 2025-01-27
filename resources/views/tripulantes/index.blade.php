<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Tripulazioa</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('erreskateak.index')}}">Erreskateak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('erreskatatuak.index')}}">Erreskatatuak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>TRIPULATZAILEAK</h1>
    <a href="{{route('tripulantes.formulario')}}" class="btn btn-primary">CREAR</a>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Izen-Abizena</th>
                <th scope="col">Rola</th>
                <th scope="col">Akzioak</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tripulantes as $tripulante)
            <tr>
                <th scope="row"><a href="{{route('tripulantes.show', $tripulante->id)}}">{{$tripulante->izena}} {{$tripulante->abizena}}</a></th>
                <td>{{$tripulante->rola}}</td>
                <td><a href="{{route('tripulantes.edit', $tripulante->id)}}" class="btn btn-success">EDITAR</a>
                    <form method="POST" action="{{route('tripulantes.destroy', $tripulante->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="BORRAR" class="btn btn-danger" />
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>