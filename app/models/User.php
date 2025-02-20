<?php

class UserModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    // Vérifier si l'email existe déjà
    public function emailExists($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }

    // Insérer un nouvel utilisateur
    public function registerUser($username, $email, $password, $role) {
        if ($this->emailExists($email)) {
            return false; // L'email est déjà utilisé
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $this->db->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $hashedPassword, $role);

        return $stmt->execute();
    }
}
