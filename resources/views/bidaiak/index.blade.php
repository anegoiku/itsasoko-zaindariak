<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Bidaiak</title>
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
    <h1>BIDAIAK</h1>
    <a href="{{route('bidaiak.formulario')}}" class="btn btn-primary">CREAR</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Helmuga</th>
                <th scope="col">Hasiera Data</th>
                <th scope="col">Amaiera Data</th>
                <th scope="col">Akzioak</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bidaiak as $bidaia)
            <tr>
                <th scope="row"><a href="{{route('bidaiak.show', $bidaia->id)}}">{{$bidaia->helmuga}}</a></th>
                <td>{{$bidaia->hasiera}}</td>
                <td>{{$bidaia->amaiera}}</td>
                <td>
                    <a href="{{route('bidaiak.edit', $bidaia->id)}}" class="btn btn-success">EDITAR</a>
                    <form method="POST" action="{{route('bidaiak.destroy', $bidaia->id)}}">
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