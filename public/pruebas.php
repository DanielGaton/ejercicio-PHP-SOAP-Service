<?php
// Definir la URL del WSDL
$wsdl = "http://localhost/tarea6/servidorSoap/servicio.wsdl";

// Definir el código del producto que quieres consultar
$codProducto = 'ACERAX3950';

try {
    // Crear el cliente SOAP
    $client = new SoapClient($wsdl, ['trace' => 1]);

    // Llamar a la función getPVP
    $pvp = $client->getPVP(['codProducto' => $codProducto]);

    // Mostrar el resultado
    echo "El PVP de $codProducto es: " . $pvp['return'] . " €";

} catch (SoapFault $e) {
    echo "Error SOAP: " . $e->getMessage();
    echo "\nRequest:\n" . $client->__getLastRequest();
    echo "\nResponse:\n" . $client->__getLastResponse();
}
?>
