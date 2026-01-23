# Tienda SOAP PHP

[![PHP](https://img.shields.io/badge/PHP-8+-blue.svg)](https://www.php.net/) 
[![MySQL](https://img.shields.io/badge/MySQL-8+-orange.svg)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

---

## Descripción

Proyecto de ejemplo que implementa un **servicio web SOAP en PHP** para consultar datos de una tienda online (`tarea6`).  
Permite acceder a información de productos, stock y familias mediante un **WSDL**, facilitando la integración con clientes SOAP.

El proyecto muestra la evolución de un servidor SOAP **sin WSDL** a uno **basado en WSDL**, con generación automática de clases cliente en PHP.

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
- Composer para autoload y dependencias.
- Arquitectura orientada a clases para separar lógica de negocio (`Operaciones.php`) del servidor SOAP (`servicioW.php`).

---
## Estructura del proyecto
```text
tarea6/
│
├─ public/ # Clientes y scripts de prueba
│ ├─ cliente.php # Cliente para servidor sin WSDL
│ ├─ clienteW.php # Cliente para servidor con WSDL
│ ├─ clienteW2.php # Cliente usando clases generadas automáticamente
│ ├─ generarClases.php # Script para generar clases cliente (wsdl2php)
│ ├─ generarWsdl.php # Script para generar el WSDL
│ ├─ pruebas.php # Pruebas generales
│ └─ style.css # Estilos para la interfaz
│
├─ servidorSoap/ # Servidores SOAP
│ ├─ servicio.php # Servidor modo no-WSDL
│ ├─ servicio.wsdl # WSDL del servicio
│ └─ servicioW.php # Servidor modo WSDL
│
├─ src/ # Lógica de negocio y clases
│ ├─ Clases1/ # Clases generadas automáticamente
│ ├─ Conexion.php # Clase para conexión PDO
│ ├─ Operaciones.php # Implementación de funciones SOAP
│ ├─ Familia.php # Clase modelo Familia
│ ├─ Producto.php # Clase modelo Producto
│ └─ Stock.php # Clase modelo Stock
│
├─ vendor/ # Librerías de Composer
├─ index.php # Panel de navegación
├─ composer.json # Configuración de dependencias
└─ README.md
```

---

## Instalación

1. Clonar el repositorio:

git clone https://github.com/DanielGaton/ejercicio-PHP-SOAP-Service.git
cd tienda-soap-php

2. Configurar WAMP/XAMPP y crear la base de datos tarea6 en MySQL.
Usuario: alumno
Contraseña: alumno

3. Importar los scripts SQL proporcionados para crear tablas y datos de ejemplo.

4. Instalar dependencias con Composer:
 composer install

5. Asegurarse de que la extensión SOAP de PHP esté habilitada.

Flujo de trabajo

1. Probar public/cliente.php (sin WSDL).

2. Generar WSDL con public/generarWsdl.php.

3. Probar public/clienteW.php (con WSDL).

4. Generar clases con public/generarClases.php en src/Clases1/.

5. Probar public/clienteW2.php usando las clases generadas.

Notas

El proyecto es extensible: se pueden añadir nuevas funciones SOAP y clientes.

Se puede integrar con cualquier cliente SOAP que soporte WSDL.

Para entornos distintos a localhost, actualizar la URL del WSDL en los clientes.

Autor

Daniel Gatón

Licencia

MIT License
