
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('tripulantes.index')}}">Atras</a>
    <h1>{{$tripulantes->izena}}</h1>
    <p>{{$tripulantes->abizena}}</p>
    <p>{{$tripulantes->rola}}</p>
</body>
</html>