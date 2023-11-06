<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
</head>

<body>
    <h1>Este es el login</h1>
    <form action="/do-login" method="POST">
        @csrf
        <label>Email:</label>
        <input type="text" name="email"><br>
        <label>Contraseña</label>
        <input type="password" name="password"><br>
        <button type="submit">Login in</button>
    </form>
</body>


</html>
