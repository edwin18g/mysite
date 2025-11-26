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

// Load routes config if present
$routes = [];
$routesFile = APP_PATH . '/config/routes.php';
if (file_exists($routesFile)) {
    $routes = include $routesFile;
    if (!is_array($routes)) {
        $routes = [];
    }
}

// Parse URL
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

// Apply routes mapping (support exact and simple pattern placeholders (:any, :num))
if (!empty($routes)) {
    foreach ($routes as $pattern => $dest) {
        $pattern = trim($pattern, '/');
        if ($pattern === $uri) {
            $uri = trim($dest, '/');
            break;
        }

        // Convert placeholders to regex safely by tokenizing before escaping
        $tokened = str_replace(['(:any)', '(:num)'], ['___ANY___', '___NUM___'], $pattern);
        $regex = preg_quote($tokened, '#');
        $regex = str_replace(['___ANY___', '___NUM___'], ['(.+)', '([0-9]+)'], $regex);
        $regex = '#^' . $regex . '$#i';
        if (preg_match($regex, $uri, $matches)) {
            // Replace $1, $2... in destination with captured groups
            $repl = $dest;
            for ($i = 1; $i < count($matches); $i++) {
                $repl = str_replace('$' . $i, $matches[$i], $repl);
            }
            $uri = trim($repl, '/');
            break;
        }
    }
}

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
