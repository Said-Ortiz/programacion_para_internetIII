<? 
    require_once('./config/conexion.php');


    $mensaje = "";

class EmpleadosController{
    public static function listar(){
        global $conexion;
        $stmt = $conexion->prepare("SELECT * FROM empleados ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);


    }

    public static function GuardarEmpleados($nombre, $puesto, $salario, $fecha_ingreso){
        global $conexion;
        $conexion->prepare("INSERT INTO");

    }







}

    

?>