<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="dist/js/libs/scripts.js"></script>
</head>
<body class="fondo">
    <div class="title-bar">
        <h1 class="TituloP">Productos Electrónicos</h1>
    </div>
    <br>
    <div class="containerxd">
        <div class="product-list">
            <?php foreach ($productos as $producto): ?>
                <div class="product-card">
                    <h2><?= $producto['Producto'] ?></h2>
                    <p><?= $producto['Descripcion'] ?></p>
                    <p>Precio: $<?= $producto['Costo'] ?></p>
                    <div class="button-group">                        
                        <button type="button" class="btn-eliminar" onclick="confirmarEliminacion(<?= $producto['id'] ?>)">Eliminar</button>
                        <button onclick="location.href='?pagina=modificar&id=<?= $producto['id'] ?>'" class="btn-modificar">Modificar</button>
                     </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- <button id="calis" onclick="mensaje('¡Se guardó correctamente!')">calamos</button> -->
        <button class="btn-agregar" onclick="location.href='?pagina=agregar'">Agregar Producto</button>
    </div>
    <!-- <button class="btn-test" onclick="location.href='?pagina=test'">Prueba SweetAlert2</button> -->
</body>
</html>
