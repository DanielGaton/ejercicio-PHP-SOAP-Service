<?php
require_once "Conexion.php";

class Producto {

    public static function getPVP(string $codProducto): float {
        $db = Conexion::getConexion();
        $stmt = $db->prepare("SELECT pvp FROM productos WHERE id = ?");
        $stmt->execute([$codProducto]);
        $fila = $stmt->fetch();
        return $fila ? (float)$fila['pvp'] : 0.0;
    }


 

    public static function getProductosFamilia(string $codFamilia): array {
        $db = Conexion::getConexion();
        $stmt = $db->prepare("SELECT nombre_corto FROM productos WHERE familia = ?");
        $stmt->execute([$codFamilia]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function getNombreProducto(string $codProducto): string {
        $db = Conexion::getConexion();
        $stmt = $db->prepare("SELECT nombre_corto FROM productos WHERE id = ?");
        $stmt->execute([$codProducto]);
        $fila = $stmt->fetch();
        return $fila ? $fila['nombre_corto'] : '';
    }
}


?>
