<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFEGIR ALUMNE</title>
</head>

<body>
    <h1>Afegeix Nou Alumne</h1>

    <!-- Formulari per afegir un nou alumne -->
    <form method="post" action="{{ route('alumnat.store') }}">
        <label for="name">Nom:</label>
        <input type="text" name="name" required>

        <label for="surname">Cognom:</label>
        <input type="text" name="surname" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <button type="submit">Afegir Alumne</button>

    </form>
    <!-- Enllaç per tornar a la vista d'alumnat utilitzant la ruta alumnat.index -->
    <div>
        <a href="{{ route('alumnat.index') }}">Alumnat</a>
    </div>
</body>

</html>