-- 1.- Creamos la Base de Datos
CREATE DATABASE IF NOT EXISTS tarea6
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

-- Seleccionamos la base de datos "tarea6"
USE tarea6;

-- 2.- Creamos las tablas

-- 2.1.1.- Tabla tiendas
CREATE TABLE IF NOT EXISTS tiendas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    tlf VARCHAR(13) NULL
);

-- 2.1.2.- Tabla familias
CREATE TABLE IF NOT EXISTS familias(
    cod VARCHAR(6) NOT NULL PRIMARY KEY,
    nombre VARCHAR(200) NOT NULL
);

-- 2.1.3.- Tabla productos
CREATE TABLE IF NOT EXISTS productos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(200) NOT NULL,
    nombre_corto VARCHAR(50) NOT NULL,
    descripcion TEXT NULL,
    pvp DECIMAL(10, 2) NOT NULL,
    familia VARCHAR(6) NOT NULL,
    CONSTRAINT fk_prod_fam FOREIGN KEY(familia)
        REFERENCES familias(cod)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    UNIQUE(nombre_corto)
);

-- 2.1.4.- Tabla stocks
CREATE TABLE IF NOT EXISTS stocks(
    producto INT NOT NULL,
    tienda INT NOT NULL,
    unidades INT UNSIGNED NOT NULL,
    CONSTRAINT pk_stock PRIMARY KEY(producto, tienda),
    CONSTRAINT fk_stock_prod FOREIGN KEY(producto)
        REFERENCES productos(id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT fk_stock_tienda FOREIGN KEY(tienda)
        REFERENCES tiendas(id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

-- 3.- Creamos un usuario (descomentalo si lo necesitas)
-- CREATE USER 'alumno'@'localhost' IDENTIFIED BY 'alumno';

-- 4.- Le damos permisos en la base de datos "tarea6"
GRANT ALL PRIVILEGES ON tarea6.* TO 'alumno'@'localhost';
FLUSH PRIVILEGES;
