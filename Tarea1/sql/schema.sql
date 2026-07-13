-- CREAR BD PARA mySQL
CREATE DATABASE IF NOT EXISTS Tarea3;

USE Tarea3;

-- CREAR TABLA DE CURSOS para MySQL (se muestra el contenido de esta tabla en index.php y en cursos.php)
CREATE TABLE IF NOT EXISTS cursos_destacados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    categoria VARCHAR(50),
    duracion INT,
    precio DECIMAL(10, 2) NOT NULL,
    imagen VARCHAR(255)
);

-- INSERTS DE PRUEBA PARA LA TABLA DE CURSOS
INSERT INTO cursos_destacados (nombre, descripcion, categoria, duracion, precio, imagen) VALUES (
    "Técnico en programación web",
    "Aprende HTML, CSS, JavaScript y frameworks modernos para construir aplicaciones web completas desde cero.",
    "Desarrollo Web",
    6,
    499.99,
    "https://images.unsplash.com/photo-1516116216624-53e697fedbea?w=600&h=400&fit=crop"
);
INSERT INTO cursos_destacados (nombre, descripcion, categoria, duracion, precio, imagen) VALUES (
    "Técnico en Ciencia de datos",
    "Explora el mundo de la ciencia de datos con Python, R y herramientas de análisis para descubrir patrones y tomar decisiones informadas.",
    "Ciencia de Datos",
    8,
    599.99,
    "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop"
);
INSERT INTO cursos_destacados (nombre, descripcion, categoria, duracion, precio, imagen) VALUES (
    "Técnico en diseño UX/UI",
    "Crea experiencias digitales memorables con principios de diseño centrado en el usuario y prototipado interactivo.",
    "Diseño UX/UI",
    5,
    399.99,
    "https://img.freepik.com/free-vector/gradient-ui-ux-landing-page_52683-69729.jpg?semt=ais_hybrid&w=740&q=80"
);
INSERT INTO cursos_destacados (nombre, descripcion, categoria, duracion, precio, imagen) VALUES (
    "Técnico en ciberseguridad",
    "Aprende a proteger sistemas y redes contra amenazas cibernéticas, desarrollando habilidades en análisis de riesgos y respuesta a incidentes.",
    "Ciberseguridad",
    8,
    599.99,
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYVBtdHjzBr17zVcGQNXAmnBctysUu-UGoTSWUyVzw1w&s"
);
INSERT INTO cursos_destacados (nombre, descripcion, categoria, duracion, precio, imagen) VALUES (
    "Técnico en Inteligencia Artificial",
    "Explora el mundo de la IA y aprende a desarrollar modelos de aprendizaje automático y redes neuronales para resolver problemas complejos.",
    "Inteligencia Artificial",
    10,
    699.99,
    "https://ailabschool.com/wp-content/uploads/2023/04/4RVXC7TM7FDDLKRTPB5AEU7RAA.jpg"
);

-- CONTINUACION DE OTRAS TABLAS




-- PÁGINA CONTACTO
-- CREACIÓN DE TABLA CONTACTO
CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    asunto VARCHAR(200) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- INSERTS DE PRUEBA PARA LA TABLA DE CONTACTO
INSERT INTO contactos (nombre, correo, telefono, asunto, mensaje) 
VALUES
    ('Luis Mora',    'luis@gotech.com',  '88001122', 'Información cursos',   'Quisiera saber los precios.'),
    ('Ana Rojas',    'ana@gotech.com',   '87223344', 'Matrícula',            'Cómo me matriculo?'),
    ('Jorge Pérez',  'jorge@gotech.com', '86554433', 'Horarios',             'Necesito horarios nocturnos.'),
    ('María Salas',  'maria@gotech.com', '85112233', 'Beca',                 'Tienen becas disponibles?'),
    ('David Núñez',  'david@gotech.com', '84998877', 'Consulta técnica',     'Tengo problemas para acceder.');
