
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('medikuak.index')}}">Atras</a>
    <h1>{{$medikuak->izena}} {{$medikuak->abizena}}</h1>
    <p>Sartze Data: {{$medikuak->sartze_data}}</p>
</body>
</html>