<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cliente SOAP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$wsdl = 'http://localhost/tarea6/servidorSoap/servicio.wsdl';

try {
    $client = new SoapClient($wsdl);

    echo "<h1>Cliente SOAP con WSDL</h1>";

    $producto = '1';
    $pvp = $client->getPVP($producto);
    echo "<h2>PVP del producto</h2>";
    echo "<table>";
    echo "<tr><th>ID Producto</th><th>PVP (€)</th></tr>";
    echo "<tr><td>1</td><td>$pvp</td></tr>";
    echo "</table>";

    $stock = $client->getStock($producto, 1);
    echo "<h2>Stock del producto</h2>";
    echo "<table>";
    echo "<tr><th>ID Producto</th><th>ID Tienda</th><th>Unidades</th></tr>";
    echo "<tr><td>$producto</td><td>1</td><td>$stock</td></tr>";
    echo "</table>";

    echo "<h2>Familias</h2>";
    echo "<table>";
    echo "<tr><th>Código Familia</th></tr>";

    foreach ($client->getFamilias() as $familia) {
        echo "<tr><td>$familia</td></tr>";
    }
    echo "</table>";


    echo "<h2>Productos de la familia MEMFLA</h2>";
    echo "<table>";
    echo "<tr><th>Producto</th></tr>";

    foreach ($client->getProductosFamilia('MEMFLA') as $producto) {
        echo "<tr><td>$producto</td></tr>";
    }
    echo "</table>";

} catch (SoapFault $e) {
    echo "<p><strong>Error SOAP:</strong> {$e->getMessage()}</p>";
    echo "<p><strong>WSDL usado:</strong> $wsdl</p>";
}


    echo <<<EOD
        <form action="../index.php" method="get">
            <button type="submit">volver</button>
    EOD;
?>

</body>
</html>
