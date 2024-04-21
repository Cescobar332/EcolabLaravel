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
    <img class="img-logo" src="{{ asset('img/ecolab_orange.png') }}">
    <p class="parrafo">¡Hola! Regístrate para utilizar nuestra aplicación:</p>
    <div class="button-container">
        <button class="button" type="button">Estudiante</button>
        <button class="button" type="button">Admin</button>
    </div>
    <form action="{{ route('inicio_sesion.post') }}" method="post">
        @csrf
        <div style="margin-bottom: 10px;">
            <input class="form-control" type="text" name="nombre" placeholder="Nombre" required title="Por favor ingresa tu nombre" autocomplete="given-name" required>
        </div>
        <div style="margin-bottom: 7px;">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido" required title="Por favor ingresa tu apellido" autocomplete="family-name" required>
        </div>
        <div style="margin-bottom: 7px;">
            <input type="email" name="email" class="form-control" placeholder="Email" required title="Por favor ingresa tu correo electrónico" autocomplete="email" required>
        </div>
        <div style="margin-bottom: 7px;">
            <input type="password" name="password" class="form-control" placeholder="Contraseña" required title="Por favor ingresa tu contraseña" autocomplete="new-password" required>
        </div>
        <div style="margin-bottom: 7px;">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required title="Por favor confirma tu contraseña" autocomplete="new-password" required>
        </div>
        <div class="form-check">
            <input type="checkbox" name="aceptar_terminos" id="aceptar_terminos" required>
            <label for="aceptar_terminos">Acepto los términos y condiciones</label>
            {{-- <img id="open-popup" class="img-icon" src="img/security.png"> --}}
            <img id="open-popup" src="img/security.png" class="img-icon" onclick="document.getElementById('popup').classList.remove('hidden')">

          </div>
        <button id="open-popup-ok" type="submit" class="button">REGÍSTRATE</button>
    </form>
    <!-- Pop-up que se mostrará al hacer clic -->
    <div id="popup" class="popup hidden">
        <div class="popup-content">
        <h2>Términos y condiciones</h2>
        <p class="subtitulo">1. Introducción</p>
        <p class="parrafo-tc">Este documento establece los términos y condiciones para el uso del sistema de información para la gestión de reactivos y residuos químicos de la Universidad Autónoma de Bucaramanga (UNAB). Al utilizar este software, el usuario acepta cumplir con estos términos y condiciones.</p>
        <p class="subtitulo">2. Propiedad intelectual</p>
        <p class="parrafo-tc">El software, sus contenidos y todos los derechos relacionados son propiedad de María Camila Villamizar Villamizar & Carlos Fernando Escobar Silva. Cualquier reproducción, distribución, modificación o uso no autorizado está prohibido y será sancionado según la legislación colombiana.</p>
        <p class="subtitulo"> 3. Licencia de uso</p>
        <p class="parrafo-tc">El software se licencia para uso exclusivo de la UNAB y sus laboratorios. El usuario no puede copiar, distribuir, modificar o crear trabajos derivados del software sin autorización expresa por escrito de los propietarios.</p>
        <p class="subtitulo">4. Responsabilidades del usuario</p>
        <p class="parrafo-tc">El usuario se compromete a usar el software de manera ética y legal. Se prohíbe el hacking, el uso indebido, la difusión de malware, el acceso no autorizado a cuentas de otros usuarios y cualquier actividad que infrinja la ley o las políticas internas de la UNAB.</p>
        <p class="subtitulo"> 5. Privacidad y protección de datos</p>
        <p class="parrafo-tc">La UNAB se compromete a proteger la información personal del usuario de acuerdo con la Ley 1581 de 2012 de Colombia. El software puede utilizar cookies para mejorar la experiencia del usuario y recopilar datos personales para fines de funcionamiento del sistema. El tratamiento de datos personales se llevará a cabo de acuerdo con las leyes de protección de datos vigentes en Colombia.</p>
        <p class="subtitulo">6. Limitaciones de responsabilidad</p>
        <p class="parrafo-tc">El software se proporciona "tal cual". La UNAB no se responsabiliza por daños o pérdidas causadas por errores, fallos del sistema, interrupciones del servicio o uso indebido del software. El usuario asume toda la responsabilidad por el uso del software y sus consecuencias.</p>
        <button id="close-popup" class="button" onclick="document.getElementById('popup').classList.add('hidden')">CERRAR</button>
        </div>
    </div>
    <div id="popup-ok" class="popup hidden">
        <div class="popup-content">
        <img class="img-logo" src="{{ asset('img/ecolab_orange.png') }}">
        <p class="parrafo-tc">¡Bienvenid@ a nuestra aplicación! Tu registro ha sido exitoso. Empieza a explorar.</p>
        <p class="parrafo-tc">¡Listo! Ahora puedes empezar a utilizar la aplicación.</p>
        <button class="button">INICIAR</button>
        </div>
    </div>
</div>
<br>
<br>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
