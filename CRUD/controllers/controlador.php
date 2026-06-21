<?php
    require_once '../config/conexion.php';

    //2. Inicializar variables globaLES QUE LA VISTA necesitara leer
    $mensaje = "";
    $lista_alumnos = [];

    // 3. Procesar el registro (CREATE)

    if (isset($_POST['btn_registrar'])) {
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);

        if(!empty($nombre) && !empty($correo)) {

            try {
                $sql = "INSERT INTO alumnos (nombre, correo) VALUES (:nombre, :correo)";
                $stmt = $conexion->prepare($sql);
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':correo', $correo);
                $stmt->execute();
                
                $mensaje = "<div> Alumno registrado con éxito.</div>";
            } catch (PDOException $e) {
                $mensaje = "<div> Error al guardar: " . $e->getMessage() . "</div>";
            }
        } else {
            $mensaje = "<div> Por favor, llene todos los campos</div>";
        }
    }

    //4. OBTENER LOS ALUMNOS (READ)
    try {
        $sql_leer = "SELECT * FROM alumnos ORDER BY id DESC";
        $stmt_leer = $conexion->prepare($sql_leer);
        $stmt_leer->execute();
        //Guardar los datos en la variable que la vista va a recorrer
        $lista_alumnos = $stmt_leer->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $mensaje .= "<div>Error al cargar alumnos: " . $e->getMessage() . "</div>"; 
    }
