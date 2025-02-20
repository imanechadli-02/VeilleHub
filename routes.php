<?php
require_once 'config/db.php';
require_once 'controllers/UserController.php';

$controller = new UserController($db);

// Get the requested URI
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Route the request
switch ($uri) {
    case '':
    case 'register':  // Show register form
        $controller->showRegisterForm();
        break;
    
    case 'register-user': // Handle registration form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->registerUser();
        }
        break;

    default:
        http_response_code(404);
        echo "Page not found!";
}
?>
