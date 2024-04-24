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
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
        <div class="container-fluid"> <!-- Esto ayuda a mantener la estructura -->
            <a class="navbar-brand" href="#">
                <!-- Imagen del logo con tamaño ajustado -->
                <img src="img/ecolab_white.png" alt="Logo ECOLAB" style="height: 30px;"> <!-- Corregí el doble comillado -->
            </a>
            
            <!-- Botón de toggle para pantallas pequeñas -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Asegúrate de usar el ícono correcto -->
                <span class="navbar-toggler-icon"></span> 
            </button>
        
            <!-- Sección colapsable -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto"> <!-- Para alinear a la derecha -->
                    <!-- Aquí debes verificar que las rutas sean correctas -->
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
                    <li class="nav-item">
                        <img src="img/user.png" class="img-icon1"> <!-- Asegúrate de que esta imagen existe -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Verifica la estructura de tu contenido -->
    <br><br> 
    <div class="container mt-5 custom">
        <h3 class="mb-4">Resumen del Estado Actual</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cantidad de Reactivos</h5>
                        <canvas id="doughnutChart"></canvas> <!-- Asegúrate de que esta etiqueta sea correcta -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 la="card-title">Cantidad de Residuos Químicos</h5>
                        <canvas id="doughnutChemicals"></canvas> <!-- Asegúrate de que esta etiqueta sea correcta -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 la="card-title">Alertas Activas</h5>
                        <canvas id="barChart"></canvas> <!-- Etiqueta correcta -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br> <!-- Separa bien el contenido -->
    
    <!-- Asegúrate de que los scripts se carguen después del contenido -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Eliminar '{{ asset('js/app.js') }}', si está en un entorno estático -->
    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById("doughnutChart").getContext("2d");
        const doughnutChart = new Chart(ctx, {
            type: "doughnut", 
            data: {
                labels: ["Alcoholes", "Ácidos org.", "Aceites", "Oxalatos", "Eteres"], 
                datasets: [{
                    data: [
                        Math.floor(Math.random() * 100), 
                        Math.floor(Math.random() * 100),
                        Math.floor(Math.random() * 100), 
                        Math.floor(Math.random() * 100), 
                        Math.floor(Math.random() * 100)
                    ],
                    backgroundColor: ["#a2d2ff", "#bde0fe", "#ffafcc", "#ffc8dd", "#cdb4db"], 
                    borderColor: "#fff",
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true, 
                cutout: "70%", 
                plugins: {
                    legend: {
                        position: "top"
                    },
                    tooltip: {
                        enabled: true
                    }
                }
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const ctxChemicals = document.getElementById("doughnutChemicals").getContext("2d");
        const doughnutChemicals = new Chart(ctxChemicals, {
            type: "doughnut", 
            data: {
                labels: [
                    "Solución de tiosulfato de sodio 2%", 
                    "Cloroformo", 
                    "Xilol + zinc",
                    "Sulfato de amonio férrico", 
                    "Eter 45 Acetona 15"
                ],
                datasets: [{
                    data: [
                        Math.floor(Math.random() * 100), 
                        Math.floor(Math.random() * 100), 
                        Math.floor(Math.random() * 100),
                        Math.floor(Math.random() * 100),
                        Math.floor(Math.random() * 100)
                    ],
                    backgroundColor: ["#a2d2ff", "#bde0fe", "#ffafcc", "#ffc8dd", "#cdb4db"], 
                    borderColor: "#fff",
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true, 
                cutout: "70%", 
                plugins: {
                    legend: {
                        position: "top"
                    },
                    tooltip: {
                        enabled: true
                    }
                }
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById("barChart").getContext("2d");
        const barChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["2-propanol", "Ácido clorhídrico fumante 37%", "2-Propanol EMPLURA", "Azul de lactofenol", "Fast Green FCF"],
                datasets: [{
                    label: "Días restantes para vencimiento",
                    data: [15, 5, 25, 3, 20], 
                    backgroundColor: ["#a2d2ff", "#bde0fe", "#ffafcc", "#ffc8dd", "#cdb4db"]
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Días restantes"
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: "Reactivos"
                    }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: true
                    }
                }
            }
        });
    });
    </script>
</html>
