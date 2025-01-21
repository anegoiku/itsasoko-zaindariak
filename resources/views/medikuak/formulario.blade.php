
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
            <a href="{{route('medikuak.index')}}">Atras</a>
            <h1>SORTU MEDIKUA</h1>
                <form action="{{ route('medikuak.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                    <label for="izena" class="form-label">Izena</label>
                        <input type="text" name="izena" class="form-control" id="izena">
                        <label for="abizena" class="form-label">Abizena</label>
                        <input type="text" name="abizena" class="form-control" id="abizena">
                        <label for="sartze_data" class="form-label">Sartze Data</label>
                        <input type="number" name="sartze_data" class="form-control" id="sartze_data">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Gorde</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
