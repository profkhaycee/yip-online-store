<?php



class Router {
    private $routes = [];

    public function get($uri, $action) {
        $this->routes[$uri] = $action;
    }

    public function post($uri, $action) {
        $this->routes[$uri] = $action;
    }

    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = rtrim(str_replace('/yip/public', '', $uri), '/');

        $action = $this->routes[$uri] ?? null;
        if (!$action) {
            echo "404 Not Found";
            return;
        }

        list($controllerName, $method) = explode('@', $action);
        require_once "../app/controllers/{$controllerName}.php";
        $controller = new $controllerName;
        $controller->$method();
    }
}
