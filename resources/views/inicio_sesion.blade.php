<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - ECOLAB</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
    <img class="img-logo" src="{{ asset('img/ecolab_blue1.png') }}">
    <p>Bienvenido de nuevo!</p>
    <form>
        @csrf
        <div style="margin-bottom: 20px;">
            <input type="email" name="email" class="form-control_is" placeholder="Correo electrónico" required>
        </div>
        <div style="margin-bottom: 20px;">
            <input type="password" name="password" class="form-control_is" placeholder="Contraseña" required>
        </div>
        <div class="continuar-texto">
            <p>O continúa con:</p>
        </div>
        <div class="columna">
            <button class="boton-servicio">
                <img class="img-login" src="{{ asset('img/google.png') }}">
            </button>
            <button class="boton-servicio">
                <img class="img-login" src="{{ asset('img/microsoft.png') }}">
            </button>
        </div>
        <div class="olvidar-link">
            <a href="{{ route('recuperar_contrasena') }}">¿Olvidaste tu contraseña?</a>
        </div>
        <button type="submit" class="button_is">INICIAR SESIÓN</button>
    </form>
    <div class="registro-link">
        <p class="mt-3">¿No tienes una cuenta? <a href="{{ route('registro') }}">Regístrate</a></p>
    </div>
</div>
<br>
<br>

</body>
</html>
