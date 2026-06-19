<?php

require_once __DIR__ . '/../config/conexion.php';

class EmpleadoController
{

    // 1. Obtener todos los empleados
    public static function listar($conexion)
    {
        try {
            $sql = 'SELECT * FROM empleados ORDER BY id DESC';
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            return ["error" => "Error al listar empleados: " . $error->getMessage()];
        }
    }

    // 2. Registrar un nuevo empleado
    public static function registrar($conexion, $nombre, $puesto, $salario)
    {
        $nombre = trim($nombre);
        $puesto = trim($puesto);
        $salario = trim($salario);

        if (empty($nombre) || empty($puesto) || empty($salario)) {
            return "<div>Hay campos vacíos.</div>";
        }

        try {
            $sql = 'INSERT INTO empleados (nombre, puesto ,salario) VALUES (:nombre, :puesto, :salario)';
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':puesto', $puesto);
            $stmt->bindParam(':salario', $salario);
            $stmt->execute();

            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } catch (PDOException $error) {
            return "<div>Error al guardar: " . $error->getMessage() . "</div>";
        }
    }

    // 3. Obtener un empleado por su ID (Para edición)
    public static function obtenerPorId($conexion, $id)
    {
        try {
            $sql = 'SELECT * FROM empleados WHERE id = :id';
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            return "<div>Error al obtener empleado: " . $error->getMessage() . "</div>";
        }
    }

    // 4. Actualizar los datos de un empleado
    public static function actualizar($conexion, $id, $nombre, $puesto, $salario)
    {
        $nombre = trim($nombre);
        $puesto = trim($puesto);
        $salario = trim($salario);

        if (empty($id) || empty($nombre) || empty($puesto) || empty($salario)) {
            return "<div>Hay campos vacíos.</div>";
        }

        try {
            $sql = "UPDATE empleados SET nombre = :nombre, puesto = :puesto, salario = :salario WHERE id = :id";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':puesto', $puesto);
            $stmt->bindParam(':salario', $salario);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return "<div>Empleado actualizado con éxito.</div>";
        } catch (PDOException $error) {
            return "<div>Error al actualizar: " . $error->getMessage() . "</div>";
        }
    }

    // 5. Eliminar un empleado
    public static function eliminar($conexion, $id)
    {
        try {
            $sql = 'DELETE FROM empleados WHERE id = :id';
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $error) {
            return "<div>Error al eliminar: " . $error->getMessage() . "</div>";
        }

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
