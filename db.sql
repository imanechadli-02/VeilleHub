CREATE DATABASE IF NOT EXISTS VeilleHub;

USE VeilleHub;



CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('Enseignant', 'Etudiant') NOT NULL
    -- is_Vlalide BOOLEAN DEFAULT 0
);

CREATE TABLE sujets (
    id_sujet INT PRIMARY KEY AUTO_INCREMENT,
    id_etudiant INT NOT NULL,
    titre VARCHAR(255) NOT NULL UNIQUE,
    description TEXT NOT NULL,
    date_proposer DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_enseignant INT DEFAULT NULL,
    status ENUM('Proposé', 'Validé', 'Rejeté') DEFAULT 'Proposé',
    FOREIGN KEY (id_etudiant) REFERENCES users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (id_enseignant) REFERENCES users(user_id) ON DELETE SET NULL
);

