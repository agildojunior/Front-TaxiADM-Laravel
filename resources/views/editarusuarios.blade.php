<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
        

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
        </label>
        <div class="sidebar">

            <header>TaxiADM</header>
            <a href="/home">
                <i class="fas fa-qrcode"></i>
                <span>Inicio</span>
            </a>
            <a href="/empresas">
                <i class="fas fa-link"></i>
                <span>Empresas</span>
            </a>
            <a href="/addempresas" >
                <i class="fas fa-link"></i>
                <span>Add_Empresas</span>
            </a>
            <a href="/taxis">
                <i class="fas fa-stream"></i>
                <span>Taxis</span>
            </a>
            <a href="/addtaxis">
                <i class="fas fa-stream"></i>
                <span>Add_Taxis</span>
            </a>
            <a href="/corridas">
                <i class="fas fa-calendar"></i>
                <span>Corridas</span>
            </a>
            <a href="/usuarios" class="active">
                <i class="fas fa-question-circle"></i>
                <span>Usuarios</span>
            </a>
            <a href="/">
                <i class="fas fa-envelope"></i>
                <span>Deslogar</span>
            </a>
            
        </div>

    <body class="antialiased">

        <div class="containerprincipal">
            <div class="container2">
                <div class="formulario-div">
                @csrf
                
                    <form class="formulario" action="{{ route('editar_usuario3', ['id' => $responseArray['id_usuario']]) }}"  method="get"> 
                    
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" value="{{$responseArray['nome_usuario']}}" placeholder="{{$responseArray['nome_usuario']}}" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="{{$responseArray['email_usuario']}}" placeholder="{{$responseArray['email_usuario']}}" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" value="{{$responseArray['senha_usuario']}}" placeholder="Nova senha." name="senha" required>
                    </div>
                    <div class="form-group">
                        <label>Tipo do usuario</label>
                        <select name="tipo" id="tipo">
                            <option value="admin">admin</option>
                            <option value="taxista">taxista</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="">Editar Usuario</button>
                    </div>

                    </form>
                
                </div>
            </div>
        </div>
        
    </body>
</html>
