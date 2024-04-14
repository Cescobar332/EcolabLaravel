<!-- resources/views/inicio_sesion.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Iniciar Sesión</h2>
    <form action="{{ route('inicio_sesion') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <div class="form-group">
            <a href="#" class="text-muted">¿Olvidaste tu contraseña?</a>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
</div>

</body>
</html>
