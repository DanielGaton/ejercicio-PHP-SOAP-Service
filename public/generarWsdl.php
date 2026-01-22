<?php
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../src/Operaciones.php";

use PHP2WSDL\PHPClass2WSDL;

try {
    $class = Operaciones::class;
    $serviceURL = "http://localhost/tarea6/servidorSoap/servicioW.php";

    $wsdlGenerator = new PHPClass2WSDL($class, $serviceURL);
    $wsdlGenerator->generateWSDL(true);

    $wsdlPath = __DIR__ . "/../servidorSoap/servicio.wsdl";
    $wsdlGenerator->save($wsdlPath);

    echo "WSDL generado correctamente en: $wsdlPath";

} catch (Exception $e) {
    echo "Error al generar WSDL: " . $e->getMessage();
}
