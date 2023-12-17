<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalls del professor</title>
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

    <h1>Detalls del professor</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $professor->id }}</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>{{ $professor->name }}</td>
        </tr>
        <tr>
            <th>Cognom</th>
            <td>{{ $professor->surname }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $professor->email }}</td>
        </tr>
    </table>
    <!-- ROUTE PER TORNAR A LA LLISTA DE PROFES -->
    <div>
        <a href="{{ route('professor.index') }}">Professorat</a>
    </div>
</body>

</html>