<!-- Pàgina que mostra una llista de professors amb les seves dades -->
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLISTA PROFESSORAT</title>

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
    <h1>LLISTA PROFESSORAT</h1>

    <!-- Taula que mostra les dades del professorat -->
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
            <!-- Bucle per recórrer i mostrar cada professor -->
            @foreach($professorat as $professor)
            <tr>
                <td>{{ $professor['id'] }}</td>
                <td>{{ $professor['name'] }}</td>
                <td>{{ $professor['surname'] }}</td>
                <td>{{ $professor['rol'] }}</td>
                <td>{{ $professor['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Enllaç per tornar a la vista d'administrador utilitzant la ruta 'admin_view' -->
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
</body>

</html>