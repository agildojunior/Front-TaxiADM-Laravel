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

            <form action="/logar" method="get"> 

                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text"placeholder="Email" name="email" required>
                </div>

                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password"placeholder="Senha" name="senha" required>
                </div>

                <button class="btn" type="submit" class="">Login</button>
                
                <!-- <a href="/cadastro"><input class="btn2" type="button" name="" value="Cadastro"></a> -->

            </form>

        </div>
        
    </body>
</html>
