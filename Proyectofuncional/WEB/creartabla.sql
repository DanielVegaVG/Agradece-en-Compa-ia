CREATE TABLE Alumnos (
    puesto CHAR(2) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(30) NOT NULL,
    contraseña VARCHAR(20) NOT NULL,
    jesuita VARCHAR(60) NOT NULL,
    imagen VARCHAR(30) NOT NULL,
    nombreWeb VARCHAR(40) NOT NULL,
    frase VARCHAR(100),
    PRIMARY KEY (puesto),
    CONSTRAINT usuario UNIQUE (usuario),
    CONSTRAINT nombreWeb UNIQUE (nombreWeb),
    CONSTRAINT magen UNIQUE (imagen)
);
////
INSERT INTO Alumnos (puesto, nombre, usuario, contraseña, jesuita, imagen, nombreWeb, frase) 
VALUES 
('01', 'Manuel', 'mnManu', 'mn123', 'San Francisco Javier', 'fjavier.jpg', 'web_fjavier', 'Todo para mayor gloria de Dios'),
('02', 'Samuel', 'smSamu', 'sm123', 'San Ignacio de Loyola', 'iloyola.jpg', 'web_ignacio', 'En todo amar y servir'),
('03', 'Yehu', 'yYehu', 'y123', 'Pedro Arrupe', 'parrupe.jpg', 'web_arrupe', 'Caer y levantarse'),
('04','Jose','jse','j123','')