<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOLAB</title>
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Aplicando la clase personalizada 'navbar-custom' -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
        <div class="container-fluid"> <!-- Esto ayuda a mantener la estructura -->
            <a class="navbar-brand" href="#">
                <!-- Imagen del logo con tamaño ajustado -->
                <img src="img/ecolab_white.png" alt="Logo ECOLAB" style="height: 30px;">
            </a>
            
            <!-- Botón de toggle para pantallas pequeñas -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Asegúrate de usar el ícono correcto -->
                <span class="navbar-toggler-icon"></span> 
            </button>
        
            <!-- Sección colapsable -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto"> <!-- Para alinear a la derecha -->
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Movimientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Alertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/qr">QR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br> <!-- Añadir estos para compensar el navbar fijo -->
    <div class="container mt-5">
        <!-- Título del resumen -->
        <h3 class="mb-4">Resumen del Estado Actual</h3>

        <!-- Contenido del resumen -->
        <div class="row">
            <!-- Estadísticas -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cantidad de Reactivos</h5>
                        <!-- Aquí puedes mostrar la cantidad de reactivos disponibles -->
                    </div>
                </div>
            </div>

            <!-- Más estadísticas -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cantidad de Residuos Químicos</h5>
                        <!-- Aquí puedes mostrar la cantidad de residuos químicos disponibles -->
                    </div>
                </div>
            </div>

            <!-- Otras estadísticas -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Alertas Activas</h5>
                        <!-- Aquí puedes mostrar la cantidad de alertas activas -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>
