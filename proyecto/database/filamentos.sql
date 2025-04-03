-- Eliminar la base de datos si ya existe
DROP DATABASE IF EXISTS filamentos;

-- Crear la base de datos de nuevo
CREATE DATABASE filamentos;

-- Seleccionar la base de datos recién creada
USE filamentos;

-- Crear la tabla de productos
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    color VARCHAR(50),
    peso DECIMAL(10, 2),
    stock INT,
    imagen_url VARCHAR(255)
);

-- Insertar productos de ejemplo
INSERT INTO productos (nombre, descripcion, precio, color, peso, stock, imagen_url) VALUES
('Filamento PLA Rojo', 'Filamento de PLA de alta calidad, ideal para impresoras 3D.', 20.99, 'Rojo', 1.0, 100, 'multimedia/images/filamento1.jpg'),
('Filamento PLA Azul', 'Filamento PLA de color azul para impresiones detalladas.', 22.50, 'Azul', 1.0, 80, 'multimedia/images/filamento2.jpg'),
('Filamento ABS Negro', 'Filamento ABS negro, perfecto para piezas duraderas y resistentes.', 25.00, 'Negro', 1.0, 50, 'multimedia/images/filamento3.jpg'),
('Filamento PETG Transparente', 'Filamento PETG transparente, ideal para proyectos que requieren resistencia y flexibilidad.', 30.00, 'Transparente', 1.0, 60, 'multimedia/images/filamento4.jpg'),
('Filamento PLA Verde', 'Filamento PLA verde ecológico, fácil de usar y respetuoso con el medio ambiente.', 18.00, 'Verde', 1.0, 120, 'multimedia/images/filamento5.jpg'),
('Filamento PLA Verde', 'Filamento PLA verde ecológico, fácil de usar y respetuoso con el medio ambiente.', 18.00, 'Verde', 1.0, 120, 'multimedia/images/filamento6.jpg');
