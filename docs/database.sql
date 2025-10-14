-- Database: mvc_native

CREATE DATABASE IF NOT EXISTS mvc_native CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE mvc_native;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (name, email) VALUES
('Ehhab Elshimi', 'ehhab@example.com'),
('John Doe', 'john@example.com'),
('Jane Smith', 'jane@example.com');
