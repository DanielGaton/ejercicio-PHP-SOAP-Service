<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cliente SOAP sin WSDL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$options = [
    'location' => 'http://localhost/tarea6/servidorSoap/servicio.php',
    'uri' => 'http://localhost/tarea6/servidorSoap'
];

try {
    $client = new SoapClient(null, $options);

    echo "<h1>Cliente SOAP sin WSDL</h1>";

    $producto = 1; // int para SOAP
    $pvp = $client->getPVP($producto);
    $nombreProducto = $client->getNombreProducto($producto);

    echo "<h2>PVP del producto</h2>";
    echo "<table>";
    echo "<tr><th>Producto</th><th>PVP (€)</th></tr>";
    echo "<tr><td>$nombreProducto</td><td>$pvp</td></tr>";
    echo "</table>";

    $stock = $client->getStock($producto, 1);

    echo "<h2>Stock del producto</h2>";
    echo "<table>";
    echo "<tr><th>Producto</th><th>ID Tienda</th><th>Unidades</th></tr>";
    echo "<tr><td>$nombreProducto</td><td>1</td><td>$stock</td></tr>";
    echo "</table>";

    $familias = $client->getFamilias();
    $familias = is_array($familias) ? $familias : (array)$familias;

    echo "<h2>Familias</h2>";
    echo "<table>";
    echo "<tr><th>Código Familia</th></tr>";
    foreach ($familias as $familia) {
        echo "<tr><td>$familia</td></tr>";
    }
    echo "</table>";

    $productos = $client->getProductosFamilia('CONSOL');
    $productos = is_array($productos) ? $productos : (array)$productos;

    echo "<h2>Productos de la familia CONSOL</h2>";
    echo "<table>";
    echo "<tr><th>Producto</th></tr>";
    foreach ($productos as $prod) {
        echo "<tr><td>$prod</td></tr>";
    }
    echo "</table>";

} catch (SoapFault $e) {
    echo "<p><strong>Error SOAP:</strong> {$e->getMessage()}</p>";
    echo "<p><strong>Location usado:</strong> {$options['location']}</p>";
    echo "<p><strong>URI usado:</strong> {$options['uri']}</p>";
}

    echo <<<EOD
        <form action="../index.php" method="get">
            <button type="submit">volver</button>
    EOD;
?>

</body>
</html>
