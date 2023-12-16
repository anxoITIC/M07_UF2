<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store_centre') }}" method="POST">
        @csrf
        <h1>Afegir centre</h1>
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="address">Adreça</label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label for="cp">CP</label>
            <input type="text" name="cp" id="cp">
        </div>
        <div>
            <label for="city">Ciutat</label>
            <input type="text" name="city" id="city">
        </div>
        <br>
            <input type="submit" value="Enviar">
    </form>
    
</body>
</html>