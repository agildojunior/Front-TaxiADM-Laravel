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
            <a href="/addempresas">
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
            <a href="/corridas" class="active">
                <i class="fas fa-calendar"></i>
                <span>Corridas</span>
            </a>
            <a href="#">
                <i class="fas fa-question-circle"></i>
                <span>Usuarios</span>
            </a>
            <a href="#">
                <i class="fas fa-question-circle"></i>
                <span>Add_Usuarios</span>
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
                
                    <form class="formulario" action="{{ route('editar_statusb', ['id' => $responseArray['id']]) }}"  method="get"> 
                    
                    <div class="form-group">
                        <label>Status</label>

                            <select name="status" id="status">
                                <option value="Solicitada">Solicitada</option>
                                <option value="Aceita">Aceita</option>
                                <option value="Finalizada">Finalizada</option>
                            </select>
                            
                        <!-- <input type="text" value="" placeholder="{{$responseArray['status_corrida']}}" name="status" required> -->
                    </div>
                    <div class="form-group">
                        <button type="submit" class="">Editar Status</button>
                    </div>

                    </form>
                
                </div>
            </div>
        </div>
        
    </body>
</html>
