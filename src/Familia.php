<?php
require_once "Conexion.php";

class Familia {

    public static function getFamilias(): array {
        $db = Conexion::getConexion();
        $stmt = $db->query("SELECT cod FROM familias");
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}
?>
