
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TRIPULATZAILEA</h1>
    <a href="{{route('tripulantes.formulario')}}">CREAR</a>
    <ul>
    @foreach ($tripulantes as $tripulante)
        <li><a href="{{route('tripulantes.show', $tripulante->id)}}">{{$tripulante->izena}} -- {{$tripulante->abizena}} -- {{$tripulante->rola}}</a> | 
        <a href="{{route('tripulantes.edit', $tripulante->id)}}">EDITAR</a> | 
        <form method="POST" action="{{route('tripulantes.destroy', $tripulante->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="BORRAR" />
        </form> 
    </li>
    @endforeach
    </ul>
</body>
</html>
