<?php
require_once "../src/Operaciones.php";

$options = [
    'uri' => 'http://localhost/tarea6/servidorSoap'
];

$server = new SoapServer(null, $options);
$server->setClass('Operaciones');
$server->handle();
?>