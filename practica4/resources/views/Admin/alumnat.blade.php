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

        .success {
            color: green;
            padding: 10px;
            margin-top: 10px;
            display: inline-block;

        }
    </style>
</head>

<body>
    <h1>LLISTA ALUMNAT</h1>
    @if(session('success'))
    <div class="success">
        <p>{{ session('success') }}</p>
    </div>
    @endif


    <!-- Taula que mostra les dades dels alumnes -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Cognom</th>
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
                <td>{{ $alumne['email'] }}</td>
                <td>
                    <!-- Enllaços per a la mostra, edició i eliminació d'alumnes -->
                    <div>
                        <a href="{{ route('alumnat.show', ['alumne' => $alumne['id']]) }}">Mostra</a>
                        <a href="{{ route('alumnat.edit', ['alumne' => $alumne['id']]) }}">Edita</a>
                    </div>
                    <div>
                        <form method="post" action="{{ route('alumnat.destroy', ['alumne' => $alumne['id']]) }}">
                            @csrf
                            @method('delete')
                            <button>Elimina</button>
                        </form>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Enllaç per tornar a la vista d'administrador utilitzant la ruta admin_view -->
    <div>
        <a href="{{ route('admin_view') }}">ADMIN VISTA</a>
    </div>

    <!-- Enllaç per afegir un nou alummne -->
    <div>
        <a href="{{ route('alumnat.create') }}">Afegir Nou Alumne</a>
    </div>
</body>

</html>