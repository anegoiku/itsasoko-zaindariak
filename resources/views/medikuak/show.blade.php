<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <a href="{{route('medikuak.index')}}">Atras</a>
    <h1>{{$medikuak->izena}} {{$medikuak->abizena}}</h1>
    <p>Sartze Data: {{$medikuak->sartze_data}}</p>
</body>

</html>