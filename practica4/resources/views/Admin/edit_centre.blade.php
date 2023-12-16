<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita el centre</title>
</head>
<body>
    <form action="{{ route('edit_centre', ['centre' => $centre['id']]) }}" method="POST">
        @csrf
        @method('put')
        <h1>Edit centre</h1>
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" value="{{ $centre->name }}">
        </div>

        <div>
            <label for="address">Adreça</label>
            <input type="text" name="address" id="address" value="{{ $centre->address }}">
        </div>
        <div>
            <label for="cp">CP</label>
            <input type="text" name="cp" id="cp" value="{{ $centre->cp }}">
        </div>
        <div>
            <label for="city">Ciutat</label>
            <input type="text" name="city" id="city" value="{{ $centre->city }}">
        </div>
        <br>
            <input type="submit" value="Enviar">
    </form>

    
</body>
</html>