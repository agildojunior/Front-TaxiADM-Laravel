<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/principal.css') }}">        
        
    </head>
    <body class="antialiased">

        <div class="containerprincipal">
            <div class="container3">
            <div class="cadastro-div">

                <form class="formulario" action="/adicionarUsuario"  method="get"> 

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" placeholder="seu nome." name="nome" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="seu email." name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" placeholder="sua senha." name="senha" required>
                    </div>
                    <div class="form-group">
                        <label>Tipo do usuario</label>
                        <select name="tipo" id="tipo">
                            <option value="admin">admin</option>
                            <option value="taxista">taxista</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="">Cadastrar</button>
                    </div>

                </form>

            </div>
            </div>
        </div>
        
    </body>
</html>
