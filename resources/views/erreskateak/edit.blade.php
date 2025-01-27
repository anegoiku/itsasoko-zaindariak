<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="mb-4">Erreskatea editatu</h1>

    <form action="{{ route('erreskateak.update', $erreskatea->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="izena" class="form-label">Izena</label>
            <input type="text" name="izena" id="izena" class="form-control" value="{{ $erreskatea->izena }}" required>
            {{-- Balidazio mezua --}}
            @error("izena")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="deskribapena" class="form-label">Deskribapena</label>
            <textarea name="deskribapena" id="deskribapena" class="form-control">{{ $erreskatea->deskribapena }}</textarea>
            {{-- Balidazio mezua --}}
            @error("deskribapena")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" id="data" class="form-control" value="{{ $erreskatea->data }}" required>
            {{-- Balidazio mezua --}}
            @error("data")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('erreskateak.index') }}" class="btn btn-secondary btn-st me-2">ATZERA</a>
            <button type="submit" class="btn btn-success btn-st">ALDATU</button>
        </div>

    </form>


</div>
</body>
</html>


