<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ProductoController::guardar($_POST['nombre'], $_POST['precio'], $_POST['stock']);
}
?>

<h2>Agregar Nuevo Producto</h2>
<div class="card p-4 shadow-sm mt-3" style="max-width: 600px;">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre del Producto</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stock Inicial</label>
            <input type="number" name="stock" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Producto</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>