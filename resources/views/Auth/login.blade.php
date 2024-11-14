<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/Login.css') }}" rel="stylesheet"> 
</head>
<body>

<div class="login-container">
    <div class="left-side">
        <h2>ADYVANCE TECHNOLOGIES</h2>
        <p>INOVANDO PARA TRANSFORMAR TU MUNDO</p>
        <img src="{{ asset('img/LogoA.jpg') }}" alt="Logo" />
    </div>
    
    <div class="right-side">
        <h2>Iniciar Sesión</h2>
        <br>
        <br>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </form>
        
        <a href="{{ route('register') }}" class="btn-register">Registrarte</a>    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
