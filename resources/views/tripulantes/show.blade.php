<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{route('tripulantes.index')}}">Atras</a>
    <h1>{{$tripulantes->izena}} {{$tripulantes->abizena}}</h1>
    <p>Sartze data: {{$tripulantes->sartze_data}}</p>
    <p>Rola: {{$tripulantes->rola}}</p>
</body>

</html>