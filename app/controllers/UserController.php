<?php
require_once 'models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct($database) {
        $this->userModel = new UserModel($database);
    }

    // Afficher le formulaire d'inscription
    public function showRegisterForm() {
        require_once 'views/auth/register.php'; // Correct path
    }

    // Gérer l'inscription d'un utilisateur
    public function registerUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $role = $_POST['role']; // "Enseignant" ou "Etudiant"

            if (!empty($username) && !empty($email) && !empty($password) && in_array($role, ['Enseignant', 'Etudiant'])) {
                $success = $this->userModel->registerUser($username, $email, $password, $role);

                if ($success) {
                    header("Location: login.php"); // Rediriger vers la page de connexion
                    exit();
                } else {
                    $error = "Cet email est déjà utilisé.";
                }
            } else {
                $error = "Veuillez remplir tous les champs correctement.";
            }
        }

        require_once 'views/auth/register.php'; // Correct path
    }
}
