<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFEGIR PROFESSOR</title>
</head>

<body>
    <h1>Afegeix Nou Professor</h1>

    <!-- INSTERTAR LES DADES PER AFEGIR EL PROFESSOR -->
    <form method="post" action="{{ route('professor.store') }}">
        <label for="name">Nom:</label>
        <input type="text" name="name" required>

        <label for="surname">Cognom:</label>
        <input type="text" name="surname" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>


        <button type="submit">Afegir</button>

    </form>
    <!-- ENLLAÇ PER ANAR A LA ROUTE DELS PROFESSORS-->
    <div>
        <a href="{{ route('professor.index') }}">Professorat</a>
    </div>
</body>

</html>