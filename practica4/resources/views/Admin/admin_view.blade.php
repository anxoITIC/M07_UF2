<!-- Pàgina de benvinguda per a l'usuari administrador -->
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvinguda Admin</title>
</head>

<body>
    <h1>Benvingut/da Admin!</h1>

    <!-- Llista d'enllaços a les pàgines de gestió -->
    <ul>
        <li><a href="{{ route('centres') }}">Centres</a></li>
        <li><a href="{{ route('alumnat.index') }}">Alumnat</a></li>
        <li><a href="{{ route('professorat') }}">Professorat</a></li>
    </ul>

    <!-- Enllaç per tancar la sessió (logout) utilitzant la ruta signin -->
    <a href="{{ route('signin') }}">Logout</a>
</body>

</html>