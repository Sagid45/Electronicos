<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba SweetAlert2</title>
</head>
<body>
    <!-- Botón para mostrar la alerta -->
    <button id="mostrarAlerta">Mostrar Alerta</button>

    <!-- Agrega el enlace al archivo sweetalert2.js
    <script src="dist/js/libs/sweetalert2.js"></script> -->

    <script>
        // Agrega un evento al botón para mostrar la alerta
        document.getElementById('mostrarAlerta').addEventListener('click', function() {
            // Muestra una alerta de SweetAlert2 con una animación de giro
            Swal.fire({
                icon: 'success',
                title: '¡Genial!',
                text: 'SweetAlert2 se ha instalado correctamente.',
                animation: {
                    rotate: 180 // Configura la animación de giro
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="dist/js/libs/Sweet.js"></script>    
</body>
</html>
