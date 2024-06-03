<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="addProduct">
    <div class="container2">
        <h1 class="TituloProduct">Editar Producto</h1>
        <form method="post" action="?pagina=productos" class="frmAgregar">
            <input type="hidden" name="id" value="<?= $producto['id'] ?>">
            <input type="hidden" name="action" value="modificar">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="txtNombre" value="<?= $producto['nombre'] ?>">
            <br><label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="txtDes" id="descripcion"><?= $producto['descripcion'] ?></textarea>
            <br>
            <label for="precio">Precio:</label>
            <input type="number" class="txtPrecio" name="precio" id="precio" value="<?= $producto['precio'] ?>">
            <br>
            <button type="submit" class="btn-guardar">Guardar</button>
            <button type="button" onclick="window.location.href='?home'" class="btn-cancelar">Cancelar</button>
        </form>
    </div>
</body>
</html>
