<?php

namespace Clases1;

class OperacionesService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'C:\wamp64\www\tarea6\public/../servidorSoap/servicio.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param int $codigoProducto
     * @return float
     */
    public function getPVP($codigoProducto)
    {
      return $this->__soapCall('getPVP', array($codigoProducto));
    }

    /**
     * @param int $codigoProducto
     * @param int $codigoTienda
     * @return int
     */
    public function getStock($codigoProducto, $codigoTienda)
    {
      return $this->__soapCall('getStock', array($codigoProducto, $codigoTienda));
    }

    /**
     * @return Array
     */
    public function getFamilias()
    {
      return $this->__soapCall('getFamilias', array());
    }

    /**
     * @param string $codigoFamilia
     * @return Array
     */
    public function getProductosFamilia($codigoFamilia)
    {
      return $this->__soapCall('getProductosFamilia', array($codigoFamilia));
    }

    /**
     * @param string $codigoProducto
     * @return string
     */
    public function getNombreProducto($codigoProducto)
    {
      return $this->__soapCall('getNombreProducto', array($codigoProducto));
    }
}