<?php
/**
 * KHIND RTO - Simple Router
 */
class Router {
    private $routes = [];

    /**
     * Register a route
     *
     * @param string $path        URL segment (e.g. '', 'catalog', 'join')
     * @param string $controller  Controller class name
     * @param string $action      Method to call on the controller
     */
    public function add($path, $controller, $action = 'index') {
        $this->routes[$path] = ['controller' => $controller, 'action' => $action];
    }

    /**
     * Match current request and dispatch to controller
     */
    public function dispatch() {
        $url = trim($_GET['url'] ?? '', '/');

        if (isset($this->routes[$url])) {
            $route = $this->routes[$url];
            $controllerClass = $route['controller'];
            $action = $route['action'];

            require_once ROOT . '/app/controllers/' . $controllerClass . '.php';
            $controller = new $controllerClass();
            $controller->$action();
        } else {
            http_response_code(404);
            include ROOT . '/app/views/404.php';
        }
    }
}
