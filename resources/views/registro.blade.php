<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOLAB</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
    <h2 class="mb-4">ECOLAB</h2>
    <p>¡Hola! Regístrate para utilizar nuestra aplicación:</p>
    <div class="button-container">
        <button class="button" type="button">Estudiante</button>
        <button class="button" type="button">Admin</button>
    </div>
    <form action="{{ route('inicio_sesion.post') }}" method="post">
        @csrf
        <div style="margin-bottom: 20px;">
            <input class="form-control" type="text" name="nombre" placeholder="Nombre" required title="Por favor ingresa tu nombre">
        </div>
        <div style="margin-bottom: 20px;">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido" required title="Por favor ingresa tu apellido">
        </div>
        <div style="margin-bottom: 20px;">
            <input type="email" name="email" class="form-control" placeholder="Email" required title="Por favor ingresa tu correo electrónico">
        </div>
        <div style="margin-bottom: 20px;">
            <input type="password" name="password" class="form-control" placeholder="Contraseña" required title="Por favor ingresa tu contraseña">
        </div>
        <div style="margin-bottom: 20px;">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required title="Por favor confirma tu contraseña">
        </div>
        <div class="form-check">
            <input type="checkbox" name="aceptar_terminos" id="aceptar_terminos" class="form-check-input" required>
            <label for="aceptar_terminos">Acepto los términos y condiciones</label>
        </div>
        <button type="submit" class="button">REGÍSTRATE</button>
    </form>
</div>

</body>
</html>
