<?php

require_once __DIR__ . "/../vendor/autoload.php";
use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

$config = new Config([
    'inputFile' => __DIR__ . '/../servidorSoap/servicio.wsdl',
    'outputDir' => __DIR__ . '/../src/Clases1',
    'namespaceName' => 'Clases1',
    'sharedTypes' => true,
]);
$generator = new Generator();
$generator->Generate($config);
?>