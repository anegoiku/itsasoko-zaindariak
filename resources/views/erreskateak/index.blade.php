<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Erreskateak</title>
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
    <div class="container p-5">
        <h1 class="mb-4 text-center">ERRESKATEAK</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('erreskateak.create') }}" class="btn btn-primary mb-3">ERRESKATE BERRIA SORTU</a>
        </div>
        <table class="table table-bordered table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IZENA</th>
                    <th>DESKRIBAPENA</th>
                    <th>DATA</th>
                    <th>AKZIOAK</th>
                </tr>
            </thead>
            <tbody>
                @forelse($erreskateak as $erreskatea)
                <tr>
                    <td>{{ $erreskatea->id }}</td>
                    <td>{{ $erreskatea->izena }}</td>
                    <td>{{ $erreskatea->deskribapena }}</td>
                    <td>{{ $erreskatea->data }}</td>
                    <td>
                        <a href="{{ route('erreskateak.show', $erreskatea->id) }}" class="btn btn-info btn-st">IKUSI</a>
                        <a href="{{ route('erreskateak.edit', $erreskatea->id) }}" class="btn btn-warning btn-st">EDITATU</a>
                        <form action="{{ route('erreskateak.destroy', $erreskatea->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-st">Ezabatu</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Ez daude erreskateak datu basean!.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>