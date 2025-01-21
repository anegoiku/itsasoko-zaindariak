
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIDAIAK</h1>
    <a href="{{route('bidaiak.formulario')}}">CREAR</a>
    <ul>
    @foreach ($bidaiak as $bidaia)
        <li><a href="{{route('bidaiak.show', $bidaia->id)}}">{{$bidaia->helguma}} -- {{$bidaia->hasiera}} -- {{$bidaia->amaiera}}</a> | 
        <a href="{{route('bidaiak.edit', $bidaia->id)}}">EDITAR</a> | 
        <form method="POST" action="{{route('bidaiak.destroy', $bidaia->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="BORRAR" />
        </form> 
    </li>
    @endforeach
    </ul>
</body>
</html>
