<!-- Pàgina que mostra una llista de centres amb les seves dades -->
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLISTA CENTRES</title>

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
    <h1>LLISTA CENTRES</h1>

    <!-- Taula que mostra les dades dels centres -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Adreça</th>
                <th>CP</th>
                <th>Ciutat</th>
                <th>Del</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($centres as $centre)
            <tr>
                <td>{{ $centre->id }}</td>
                <td>{{ $centre->name }}</td>
                <td>{{ $centre->address }}</td>
                <td>{{ $centre->cp }}</td>
                <td>{{ $centre->city }}</td>

                <!-- Formulari per eliminar un registre de la taula 'centres' a partir de la seva ID -->
                <td>
                    <form method="post" action="{{ route('delete_centre', ['centre' => $centre['id']]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit">DEL</button>
                    </form>
                </td>

                <!-- Enllaç per editar un registre de la taula 'centres' a partir de la seva ID -->
                <td>
                    <a href="{{ route('show_centre', ['centre' => $centre['id']]) }}">EDIT</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

    <!-- Enllaç per tornar a la vista d'administrador utilitzant la ruta 'admin_view' -->
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a>

    <a href="{{ route('create_centre') }}">ADD CENTRE</a>
</body>

</html>