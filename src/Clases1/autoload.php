<?php


 function autoload_867fd74244afd1c11f1b730700ee7952($class)
{
    $classes = array(
        'Clases1\OperacionesService' => __DIR__ .'/OperacionesService.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_867fd74244afd1c11f1b730700ee7952');

// Do nothing. The rest is just leftovers from the code generation.
{
}
