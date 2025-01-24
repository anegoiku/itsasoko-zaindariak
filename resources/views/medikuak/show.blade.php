<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <a href="{{route('medikuak.index')}}" class="btn-back">Atrás</a>
        <h1>{{$medikuak->izena}} {{$medikuak->abizena}}</h1>
        <p><strong>Sartze data:</strong> {{$medikuak->sartze_data}}</p>
    </div>
</body>

</html>