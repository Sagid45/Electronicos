DROP DATABASE if EXISTS Electronics;
CREATE DATABASE Electronics;
USE Electronics;

/*-------------------------------------------tabla de productos------*/
DROP TABLE IF EXISTS productos;
CREATE TABLE productos(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nombre VARCHAR(50) NOT NULL,
descripcion VARCHAR(150) NOT NULL,
precio DOUBLE NOT NULL);

/*-------------------------------------------Procedure para Agregar productos------*/
DELIMITER //
DROP PROCEDURE IF EXISTS InsertarProducto;
CREATE PROCEDURE InsertarProducto(
    IN p_nombre VARCHAR(50),
    IN p_descripcion VARCHAR(150),
    IN p_precio DOUBLE
)
BEGIN
    INSERT INTO productos (nombre, descripcion, precio)
    VALUES (p_nombre, p_descripcion, p_precio);
END //
DELIMITER ;

/*-------------------------------------------Procedure para Eliminar productos------*/
DELIMITER //
DROP PROCEDURE IF EXISTS EliminarProducto;
CREATE PROCEDURE EliminarProducto(
    IN p_id INT
)
BEGIN
    DELETE FROM productos WHERE id = p_id;
END //
DELIMITER ;

/*-------------------------------------------Procedure para Modoficiar productos------*/
DELIMITER //
DROP PROCEDURE IF EXISTS ModificarProducto;
CREATE PROCEDURE ModificarProducto(
    IN p_id INT,
    IN p_nombre VARCHAR(50),
    IN p_descripcion VARCHAR(150),
    IN p_precio DOUBLE
)
BEGIN
    UPDATE productos
    SET nombre = p_nombre,
        descripcion = p_descripcion,
        precio = p_precio
    WHERE id = p_id;
END //
DELIMITER ;

/*-------------------------------------------vista de producto------*/
DROP VIEW IF EXISTS vista_productos;
CREATE VIEW vista_productos AS
SELECT id as id, nombre AS Producto, descripcion AS Descripcion, precio AS Costo
FROM productos;

/*-------------------------------------------Pruebas------*/
SELECT * FROM vista_productos;
SELECT * FROM productos;
INSERT INTO productos VALUES(NULL,'Batidora','Batidora de 2 aspas automaticas',500);
CALL InsertarProducto('Waflera', 'Waflera de gran capacidad', 99.99);
CALL EliminarProducto(-1);
CALL ModificarProducto(1, 'Batidor', 'Batidor de 2 aspas automaticas', 250);

