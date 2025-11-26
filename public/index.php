<?php
// Simple front controller and router (CodeIgniter-like: /controller/method/params)
// Note: For production, add sanitization, autoloading, and better error handling.

// Serve static files when using built-in PHP server
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if ($path && is_file($path)) {
        return false; // let the server serve the file
    }
}

// Basic constants
define('APP_PATH', realpath(__DIR__ . '/../app'));

// Load base controller
require_once APP_PATH . '/core/Controller.php';

// Parse URL
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');
$segments = $uri === '' ? [] : explode('/', $uri);

$controllerName = !empty($segments[0]) ? ucfirst($segments[0]) : 'Home';
$method = isset($segments[1]) && $segments[1] !== '' ? $segments[1] : 'index';
$params = array_slice($segments, 2);

$controllerFile = APP_PATH . '/controllers/' . $controllerName . '.php';

if (!file_exists($controllerFile)) {
    http_response_code(404);
    echo "Controller '$controllerName' not found.";
    exit;
}

require_once $controllerFile;

if (!class_exists($controllerName)) {
    http_response_code(500);
    echo "Controller class '$controllerName' missing.";
    exit;
}

$controller = new $controllerName();

if (!method_exists($controller, $method)) {
    http_response_code(404);
    echo "Method '$method' not found in controller '$controllerName'.";
    exit;
}

call_user_func_array([$controller, $method], $params);
