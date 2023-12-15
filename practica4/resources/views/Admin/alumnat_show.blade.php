<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumne detalls</title>
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

    <h1>Alumne detalls</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $alumne->id }}</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>{{ $alumne->name }}</td>
        </tr>
        <tr>
            <th>Cognom</th>
            <td>{{ $alumne->surname }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $alumne->email }}</td>
        </tr>
    </table>
    <!-- Enllaç per tornar a la vista d'alumnat utilitzant la ruta alumnat.index -->
    <div>
        <a href="{{ route('alumnat.index') }}">Alumnat</a>
    </div>
</body>

</html>