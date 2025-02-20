<?php
require_once 'config/db.php';
require_once 'models/UserModel.php';
require_once 'controllers/UserController.php';
require_once 'routes.php';


$controller = new UserController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->registerUser();
} else {
    $controller->showRegisterForm();
}
