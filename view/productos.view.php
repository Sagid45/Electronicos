<!-- <div class="container">
    <h1>Productos Electrónicos</h1>
    <div class="product-list">
        <?php foreach ($productos as $producto): ?>
            <div class="product-card">
                <h2><?= $producto['Producto'] ?></h2>
                <p><?= $producto['Descripcion'] ?></p>
                <p>Precioso: $<?= $producto['Costo'] ?></p>
                <form method="post" action="?pagina=productos">
                    <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                    <input type="hidden" name="action" value="delete">
                    <button type="submit">Elimina</button>
                </form>
                <button onclick="location.href='?pagina=modificar&id=<?= $producto['id'] ?>'">Modificar</button>
            </div>
        <?php endforeach; ?>
    </div>
    <button onclick="location.href='?pagina=agregar'">Agregar Producto</button>
</div> -->
