
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
            <a href="{{route('tripulantes.index')}}">Atras</a>
            <h1>SORTU TRIPULATZAILEA</h1>
                <form action="{{ route('tripulantes.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="izena" class="form-label">Izena</label>
                        <input type="text" class="form-control" id="izena" name="izena">
                        <label for="abizena" class="form-label">Abizena</label>
                        <input type="text" class="form-control" id="abizena" name="abizena">
                        <label for="rola" class="form-label">Aukeratu rola:</label>
                        <select class="form-select" aria-label="Aukeratu rola:" id="rola" name="rola">
                            <option selected>Aukeratu rola: </option>
                            <option value="Kapitaina">Kapitaina</option>
                            <option value="Makinen Burua">Makinen Burua</option>
                            <option value="Mekanikoa">Mekanikoa</option>
                            <option value="Zubi Ofiziala">Zubi Ofiziala</option>
                            <option value="Marinela">Marinela</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Gorde</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
