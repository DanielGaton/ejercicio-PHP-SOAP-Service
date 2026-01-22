<?php
class Conexion {
    private static $conexion = null;

    public static function getConexion() {
        if (self::$conexion === null) {
            self::$conexion = new PDO(
                "mysql:host=localhost;dbname=tarea6;charset=utf8mb4",
                "alumno",
                "alumno",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        }
        return self::$conexion;
    }
}
?>
