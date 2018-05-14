<?php

class Router
{

    private $_routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->_routes = include $routesPath;
    }

    /**
     * Returns request string
     *
     * @return void
     */
    private function _getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->_getURI();

        foreach ($this->_routes as $uriPattern => $path) {

            if (preg_match("~$uriPattern~", $uri)) {

                $segments = explode('/', $path);
                $controllerName = ucfirst(array_shift($segments) . 'Controller');
                $actionName = 'action' . ucfirst(array_shift($segments));

                $controllerFile = ROOT . "/controllers/" . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once $controllerFile;
                }

                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName();
                if ($result != null) {
                    break;
                }

            }

        }
    }
}
