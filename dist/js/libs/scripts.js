function confirmarEliminacion(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción eliminará el producto",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminarProducto(id);
        }
    })
}

function eliminarProducto(id) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '?pagina=productos', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            location.reload();
        } else {
            console.error('La solicitud AJAX para eliminar el producto falló');
        }
    };
    var params = 'id=' + id + '&action=delete';
    xhr.send(params);
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("frmAgregar").addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar que el formulario se envíe automáticamente

        var nombre = document.getElementById("nombre").value;
        var descripcion = document.getElementById("descripcion").value;
        var precio = document.getElementById("precio").value;

        // Aquí realizarías la solicitud AJAX al servidor para guardar el producto
        // Por simplicidad, voy a simular una solicitud exitosa con setTimeout

        // Simular una solicitud AJAX exitosa después de 1 segundo
        setTimeout(function() {
            // Mostrar la alerta de éxito
            mensaje("¡El producto se ha guardado correctamente!");

            // Redirigir automáticamente a la página de inicio después de aceptar la alerta
            setTimeout(function() {
                window.location.href = "?home";
            }, 2000); // Redirigir después de 2 segundos (2000 milisegundos)
        }, 1000); // Simular un retardo de 1 segundo (1000 milisegundos)
    });
});

function mensaje(mensaje) {
    Swal.fire({
        title: mensaje,
        icon: "success",
        confirmButtonText: "Aceptar",
        showCloseButton: true
    });
}


