<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - ECOLAB</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .registro-link {
            text-align: center;
            margin-top: 20px; /* Agrega espacio en la parte superior */
        }
        .olvidar-link {
            text-align: right;
            margin-bottom: 20px; /* Agrega espacio en la parte inferior */
        }
        .continuar-texto {
            text-align: left;
            margin-top: 20px; /* Agrega espacio en la parte superior */
        }
        .boton-servicio {
            background-color: #f0f0f0; /* Gris */
            border: 2px solid #004E98; /* Borde azul */
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            color: #004E98; /* Color del texto */
        }
        .boton-servicio img {
            width: 80px; /* Ancho deseado */
            height: 80px; /* Altura deseada */
            display: block; /* Esto es importante para evitar espacios adicionales */
            margin: auto; /* Centrar la imagen dentro del botón */
        }

        /* Estilo para los campos de entrada y el botón */
        .form-control,
        .button {
            border: 2px solid #004E98; /* Color del borde */
            color: #004E98; /* Color del texto */
        }

        /* Estilos para el botón cuando el cursor está sobre él */
        .boton-servicio:hover,
        .button:hover {
            background-color: #004E98; /* Color de fondo al pasar el cursor */
            color: #fff; /* Color del texto al pasar el cursor */
            border-color: #004E98; /* Borde azul al pasar el cursor */
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mb-4">ECOLAB</h2>
    <p>Bienvenido de nuevo!</p>
    <form>
        @csrf
        <div style="margin-bottom: 20px;">
            <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
        </div>
        <div style="margin-bottom: 20px;">
            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <div class="continuar-texto">
            <p>O continúa con:</p>
        </div>
        <div class="botones-container">
            <button class="boton-servicio" type="button">
                <img src="images/google.png">
            </button>
            <button class="boton-servicio" type="button">
                <img src="images/microsoft.png">
            </button>
        </div>
        <div class="olvidar-link">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
        <button type="submit" class="button">INICIAR SESIÓN</button>
    </form>
    <div class="registro-link">
        <p class="mt-3">¿No tienes una cuenta? <a href="{{ route('registro') }}">Regístrate</a></p>
    </div>
</div>

</body>
</html>
