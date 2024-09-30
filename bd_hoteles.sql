CREATE DATABASE bd_hoteles;
USE bd_hoteles;
CREATE TABLE habitaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_habitacion VARCHAR(50) NOT NULL,
    disponible TINYINT(1) NOT NULL DEFAULT 1,
    precio DECIMAL(10,2) NOT NULL
);
INSERT INTO habitaciones (tipo_habitacion, disponible, precio)
VALUES 
('Sencilla', 1, 100.00),
('Doble', 0, 150.00),
('Suite', 1, 250.00);
