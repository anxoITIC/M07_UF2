<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITA PROFESSOR</title>
</head>

<body>

    <h1>Edita Professor</h1>

    <!-- FORMULARI PER INSERIR LES DADES -->
    <form method="post" action="{{ route('professor.update', ['professor' => $professor->id]) }}">
        @csrf
        @method('put')

        <label for="name">Nom:</label>
        <input type="text" name="name" value="{{ $professor->name }}" required>

        <label for="surname">Cognom:</label>
        <input type="text" name="surname" value="{{ $professor->surname }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $professor->email }}" required>

        <button type="submit" href="{{ route('professor.index') }}">Actualitza</button>
    </form>

    <!-- ROURE PER TORNAR A VEURE ELS PROFESSORS -->
    <div>
        <a href="{{ route('professor.index') }}">Professorat</a>
    </div>
</body>

</html>