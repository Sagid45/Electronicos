<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="addProduct">
    <div class="container2">
        <h1 class="TituloProduct">Agregar Producto</h1>
        <form method="post" action="?pagina=productos" class="frmAgregar">
            <input type="hidden" name="action" value="add">
            <label for="nombre" class="Lavel">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="txtNombre" placeholder="Television" required>
            <label for="descripcion" class="Lavel">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="txtDes" placeholder="Television de 90 pulgadas" required></textarea>
            <label for="precio" class="Lavel">Precio:</label>            
            <input type="number" class="txtPrecio" id="precio" name="precio" step="0.01" placeholder="$ 10000" required>            
            <button type="submit" class="btn-guardar">Guardar</button>
            <button type="button" onclick="location.href='?home'" class="btn-cancelar">Cancelar</button>
        </form>
    </div>
</body>
</html>

