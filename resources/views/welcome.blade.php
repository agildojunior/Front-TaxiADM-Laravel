<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    </head>
    <body class="antialiased">

        <div class="login-box">

            <h1>Login</h1>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text"placeholder="Username"name=""value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password"placeholder="Password"name=""value="">
            </div>

            <a href="/home"><input class="btn" type="button" name="" value="Logar"></a>
            <input class="btn2" type="button" name="" value="Cadastro">

        </div>
        
    </body>
</html>
