<!-- Pàgina que mostra una llista d'alumnes amb les seves dades -->
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLISTA ALUMNAT</title>

    <!-- Estils per a la taula -->
    <style>
        table {
            border: 1px solid;
        }

        th,
        td {
            border: 1px solid;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>LLISTA ALUMNAT</h1>

    <!-- Taula que mostra les dades dels alumnes -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Cognom</th>
                <th>Rol</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Bucle per recórrer i mostrar cada alumne -->
            @foreach($alumnat as $alumne)
            <tr>
                <td>{{ $alumne['id'] }}</td>
                <td>{{ $alumne['name'] }}</td>
                <td>{{ $alumne['surname'] }}</td>
                <td>{{ $alumne['rol'] }}</td>
                <td>{{ $alumne['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Enllaç per tornar a la vista d'administrador utilitzant la ruta admin_view -->
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
</body>

</html>