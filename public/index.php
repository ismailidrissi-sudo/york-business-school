<?php
/**
 * York Business School - Front Controller
 * All requests are routed through this file.
 */

define('BASE_PATH', dirname(__DIR__));

// Load routes
$routes = require BASE_PATH . '/config/routes.php';

// Get the requested page
$page = isset($_GET['page']) ? trim($_GET['page'], '/') : '';

// Dispatch to the correct controller
if (isset($routes[$page])) {
    [$controllerName, $method] = $routes[$page];
} else {
    [$controllerName, $method] = $routes[''];
}

// Load and instantiate the controller
$controllerFile = BASE_PATH . '/app/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
    $controller->$method();
} else {
    http_response_code(404);
    echo '<h1>404 - Page Not Found</h1>';
}
