<?php
$id = $_GET['id'];
$producto = ProductoController::obtenerPorId($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ProductoController::actualizar($id, $_POST['nombre'], $_POST['precio'], $_POST['stock']);
}
?>

<h2>Editar Producto</h2>
<div class="card p-4 shadow-sm mt-3" style="max-width: 600px;">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre del Producto</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $producto['nombre']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="<?php echo $producto['precio']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" value="<?php echo $producto['stock']; ?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>