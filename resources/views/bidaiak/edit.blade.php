
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <a href="{{route('bidaiak.index')}}">Atras</a>
            <h1>FORMULARIO</h1>
                <form action="{{route('bidaiak.update', $bidaiak->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-2">
                        <label for="hasiera" class="form-label">Hasiera</label>
                        <input type="text" name="hasiera" class="form-control" id="hasiera" value="{{$bidaiak->hasiera}}">
                        <label for="amaiera" class="form-label">Amaiera</label>
                        <input type="text" name="amaiera" class="form-control" id="amaiera" value="{{$bidaiak->amaiera}}">
                        <label for="helmuga" class="form-label">Helmuga</label>
                        <input type="text" name="helmuga" class="form-control" id="helmuga" value="{{$bidaiak->helmuga}}">
                        <!-- Tripulante -->
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
