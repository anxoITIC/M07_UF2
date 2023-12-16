<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITA ALUMNE</title>
</head>

<body>

    <h1>Edita Alumne</h1>

    <!-- Formulari per editar alumne -->
    <form method="post" action="{{ route('alumnat.update', ['alumne' => $alumne->id]) }}">
        @csrf
        @method('put')

        <label for="name">Nom:</label>
        <input type="text" name="name" value="{{ $alumne->name }}" required>

        <label for="surname">Cognom:</label>
        <input type="text" name="surname" value="{{ $alumne->surname }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $alumne->email }}" required>

        <button type="submit">Actualitza Alumne</button>
    </form>

    <!-- Enllaç per tornar a la vista d'alumnat utilitzant la ruta alumnat.index -->
    <div>
        <a href="{{ route('alumnat.index') }}">Alumnat</a>
    </div>
</body>

</html>