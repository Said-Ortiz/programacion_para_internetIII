<?php 
    $productos = ProductoController::listar();
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Lista de Productos</h2>
    <a href="index.php?action=crear" class="btn btn-primary">Nuevo Producto</a>
</div>
<table class="table table-hover border">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $p): ?>
            <tr>
                <td><?php echo $p['id']; ?></td>
                <td><?php echo $p['nombre']; ?></td>
                <td><?php echo number_format($p['precio'],2); ?></td>
                <td><?php echo $p['stock']; ?></td>
                <td>
                    <a href="index.php?action=editar&id=<?php echo $p['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="index.php?action=eliminar&id=<?php echo $p['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar?')">Eliminar</a>
                </td>
                 
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>