<?php

    require_once '../config/conexion.php';

    $mensaje = "";
    $lista_alumnos = [];

    //procesar el registro (create)
    if (isset($_POST['btn_registrar'])){
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $fecha_registro = $_POST['fecha_registro'];
        $telefono = $_POST['telefono'];

        if (!empty($nombre) && !empty($correo) && !empty($fecha_registro) && !empty($telefono)){

            try{
                $sql = "INSERT INTO alumnos (nombre, correo, fecha_registro, telefono) VALUES (:nombre, :correo, :fecha_registro, :telefono)";
                $stmt = $conexion->prepare($sql);
                $stmt->bindParam(":nombre", $nombre);
                $stmt->bindParam(":correo", $correo);
                $stmt->bindParam(":fecha_registro", $fecha_registro);
                $stmt->bindParam(":telefono", $telefono);
                $stmt->execute();
                $mensaje = "<div class='alert alert-success'> Alumno registrado con exito. </div>";

            } catch(PDOException $e){

                $mensaje = "<div class='alert alert-warning'> Error al guardar" .$e->getMessage() . "</div>" ;
            }
        } else {
            $mensaje = "<div class='alert alert-danger'> Por favor llenar todos los campos </div>";

        }

    }


    try{
        $sql_leer = "SELECT * FROM alumnos ORDER BY id DESC";

        $stmt_leer = $conexion->prepare($sql_leer);
        $stmt_leer->execute();
        $lista_alumnos = $stmt_leer->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $mensaje = "<div class='alert alert-danger'> Error al cargar alumnos " . $e->getMessage() . "</div>"; 


    }
