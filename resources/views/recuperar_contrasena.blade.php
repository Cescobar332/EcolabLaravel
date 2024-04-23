<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - ECOLAB</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Recuperar Contraseña</h2>
        <p>Ingresa tu correo electrónico para recibir instrucciones sobre cómo restablecer tu contraseña.</p>
        
        <form>
            @csrf
            <div>
                <input type="email" name="email" class="form-control_is" placeholder="Correo electrónico" required>
            </div>
            <button type="submit" class="button_is">Enviar Instrucciones</button>
        </form>
    </div>
</body>
</html>
