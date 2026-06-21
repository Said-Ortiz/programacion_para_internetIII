<?php
//ESste archivo maneja la logica de negocio (CRUD). Recibe las peticiones, procesa los datos y decide que hacer.
require_once "config/conexion.php";


class ProductoController {
    //LISTAR PRODUCTOS
    public static function listar(){
        global $conexion;
        $stmt = $conexion->prepare("SELECT * FROM productos ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //CREAR PRODUCTO
    public static function guardar($nombre, $precio, $stock){
        global $conexion;
        $stmt = $conexion->prepare("INSERT INTO productos (nombre, precio, stock) VALUES (:nombre, :precio, :stock)");
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":precio", $precio);
        $stmt->bindParam(":stock", $stock);
        if($stmt->execute()){
            header("Location: index.php?msg=guardado");
        }
    }
    //obtener un solo producto para editar
    public static function obtenerPorId($id){
        global $conexion;
        $stmt = $conexion->prepare("SELECT * FROM productos WHERE id = :id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //Actualizar Producto
    public static function actualizar($id, $nombre, $precio, $stock){
        global $conexion;
         $stmt = $conexion->prepare("UPDATE productos SET nombre = :nombre, precio = :precio, stock = :stock WHERE id = :id");
        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":precio",$precio);
        $stmt->bindParam(":stock",$stock);
        if($stmt->execute()){
            header("Location: index.php?msg=actualizado");
        }
    }
    //Eliminar Producto
    public static function eliminar($id){
        global $conexion;
        $stmt = $conexion->prepare("DELETE FROM productos WHERE id = :id");
        $stmt->bindParam(":id",$id);
        if($stmt->execute()){
            header("Location: index.php?msg=eliminado");
        }
    }
}
?>

