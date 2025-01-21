
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MEDIKUAK</h1>
    <a href="{{route('medikuak.formulario')}}">CREAR</a>
    <ul>
    @foreach ($medikuak as $medikua)
        <li><a href="{{route('medikuak.show', $medikua->id)}}">{{$medikua->izena}} -- {{$medikua->abizena}} -- {{$medikua->sartze_data}}</a> | 
        <a href="{{route('medikuak.edit', $medikua->id)}}">EDITAR</a> | 
        <form method="POST" action="{{route('medikuak.destroy', $medikua->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="BORRAR" />
        </form> 
    </li>
    @endforeach
    </ul>
</body>
</html>
