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

        .success {
            color: green;
            padding: 10px;
            margin-top; 10px;
            display: inline-block;
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
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Bucle per recórrer i mostrar cada professor -->
            @foreach($professor as $professorat)
            <tr>
                <td>{{ $professorat['id'] }}</td>
                <td>{{ $professorat['name'] }}</td>
                <td>{{ $professorat['surname'] }}</td>
                <td>{{ $professorat['email'] }}</td>
                <td>
                    //MODIFICACIONS
                    <div>
                        <a href="{{ route('professor.show', ['professor' => $professorat['id']]) }}">Mostra</a>
                        <a href="{{ route('professor.edit', ['professor' => $professorat['id']]) }}">Edita</a>
                    </div>
                    <div>
                        <form method="post" action="{{ route('professor.destroy', ['professor' => $professorat['id']]) }}">
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

    <!-- Enllaç per tornar a la vista d'administrador utilitzant la ruta 'admin_view' -->
    <a href="{{ route('admin_view') }}">ADMIN VISTA</a>

    <!--ENLLAÇ PER AFEGIR UN PROFESSOR NOU-->
    <div>
        <a href="{{ route('professor.create') }}">Afegir un professor</a>
    </div>

</body>

</html>