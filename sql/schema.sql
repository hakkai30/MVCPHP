-- Base de dades per al projecte MVC (Pas_a_pas + U04EX01 FASE 1 i 2)
CREATE DATABASE IF NOT EXISTS u03_projecte CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE u03_projecte;

CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    category_id INT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO categories (nom) VALUES ('Treball'), ('Estudis');

INSERT INTO tasks (title, description, category_id) VALUES
('Primera tasca', 'Aquesta és la primera tasca del projecte MVC', 1),
('Segona tasca', 'Servirà per comprovar que el llistat funciona correctament', 2);
