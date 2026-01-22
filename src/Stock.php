<?php
require_once "Conexion.php";

class Stock {

    public static function getStock(string $codProducto, int $codTienda): int {
        $db = Conexion::getConexion();
        $sql = "
            SELECT s.unidades
            FROM stocks s
            JOIN productos p ON s.producto = p.id
            WHERE p.id = ? AND s.tienda = ?
        ";
        $stmt = $db->prepare($sql);
        $stmt->execute([$codProducto, $codTienda]);
        $fila = $stmt->fetch();
        return $fila ? (int)$fila['unidades'] : 0;
    }
}
?>
