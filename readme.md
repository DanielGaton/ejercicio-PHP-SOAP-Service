# Tienda SOAP PHP

[![PHP](https://img.shields.io/badge/PHP-8+-blue.svg)](https://www.php.net/) 
[![MySQL](https://img.shields.io/badge/MySQL-8+-orange.svg)](https://www.mysql.com/)

## Descripción

Proyecto de ejemplo que implementa un **servicio web SOAP en PHP** para consultar datos de una tienda online.  
Permite acceder a información de productos, stock y familias mediante un **WSDL**, facilitando la integración con clientes SOAP.

---

## Funcionalidades

- Consultar el **PVP** de un producto por su código.
- Obtener el **stock** de un producto en una tienda específica.
- Listar todas las **familias de productos**.
- Listar los **productos de una familia** específica.

---

## Tecnologías

- PHP 8+ con extensión SOAP.
- MySQL / phpMyAdmin.
- WSDL para definir la interfaz SOAP.
- Arquitectura orientada a clases (`Operaciones.php`) para separar la lógica de negocio del servidor SOAP (`servicioW.php`).

---

## Estructura del proyecto

tarea6/
│
├─ public/
│ └─ pruebas.php # Cliente SOAP de prueba
│
├─ servidorSoap/
│ ├─ servicioW.php # Servidor SOAP
│ └─ servicio.wsdl # WSDL del servicio
│
├─ src/
│ ├─ Operaciones.php # Métodos SOAP
│ ├─ Producto.php # Clase de productos
│ ├─ Familia.php # Clase de familias
│ └─ Stock.php # Clase de stock
│
└─ vendor/ # Autoload si se usa Composer

---

## Instalación

1. Clonar el repositorio:


git clone https://github.com/tuusuario/tienda-soap-php.git
cd tienda-soap-php

2. Configurar WAMP/XAMPP y crear la base de datos tarea6 en MySQL con los datos de ejemplo.

3. Asegurarse de que la extensión SOAP de PHP esté habilitada.