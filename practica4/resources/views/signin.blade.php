<html>

<head>
    <title>Sign In</title>
</head>

<body>
    <h2>{{ $title }}</h2>

    <!-- Mostra un missatge d'error si hi ha una variable de sessió 'error' definida -->
    @if(session('error'))
    <h3 style="color: red;">{{ session('error') }}</h3>
    @endif

    <!-- Formulari per enviar les dades d'usuari mitjançant una sol·licitud POST a la ruta usuaris -->
    <form method="POST" action="{{ route('usuaris') }}">
        @csrf

        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
    </form>
    <div>
        <!-- Enllaç per anar a la pàgina de registre utilitzant la ruta signup -->
        <a href=" {{ route('signup') }} ">Anar a la pàgina de registre</a>
    </div>

</body>

</html>