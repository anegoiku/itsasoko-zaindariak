<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <a href="{{route('bidaiak.index')}}">Atras</a>
    <h1>{{$bidaiak->helmuga}}</h1>
    <p>Hasiera data: {{$bidaiak->hasiera}}</p>
    <p>Amaiera data: {{$bidaiak->amaiera}}</p>
</body>

</html>