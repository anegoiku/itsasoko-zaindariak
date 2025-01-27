<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Erreskatatuak</title>
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
    <div class="p-5">
        <h1 class="text-center mb-4">ERRESKATATUAK</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('erreskatatuak.create') }}" class="btn btn-primary mb-3">SORTU ERRESKATATUAK</a>
        </div>

        <table class="table table-striped table-hover text-center table-bordered">
            <thead>
                <tr>
                    <th>IZENA</th>
                    <th>ABIZENA</th>
                    <th>ADINA</th>
                    <th>ERRESKATEAK</th>
                    <th>AKZIOAK</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($erreskatatuak as $erreskatatuak)
                <tr>
                    <td>{{ $erreskatatuak->izena }}</td>
                    <td>{{ $erreskatatuak->abizena }}</td>
                    <td>{{ $erreskatatuak->adina }}</td>
                    <td>{{ $erreskatatuak->erreskateak->izena }}</td>
                    <td>
                        <a href="{{ route('erreskatatuak.show', $erreskatatuak->id) }}" class="btn btn-info btn-st">IKUSI</a>
                        <a href="{{ route('erreskatatuak.edit', $erreskatatuak->id) }}" class="btn btn-warning btn-st">EDITATU</a>
                        <form action="{{ route('erreskatatuak.destroy', $erreskatatuak->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-st">EZABATU</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">ez daude erreskatatuak datu basean!.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>