<?php
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../src/Operaciones.php";

try {
    $wsdl = __DIR__ . "/servicio.wsdl";
    $server = new SoapServer($wsdl);
    $server->setClass('Operaciones');
    $server->handle();

} catch (SoapFault $e) {
    echo "SOAP Error: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>