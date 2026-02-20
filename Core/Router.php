<?php

namespace Core;

class Router
{
    /**
     * Recoit l?URL entröe par l'utilisateur (par exemple : /home)
     */
    public function dispatch(string $url): void
    {
        $uri = parse_url($url, PHP_URL_PATH);

        $uri = trim($uri, '/');
        $uriParts = explode('/', $uri);

        $className = $uriParts[0];
        $methodName = $uriParts[1] ?? 'index';

        $className = ucfirst($className);
        $className = "App\\Controllers\\{$className}Controller";

        $controller = new $className();
        $controller->before();
        $controller->$methodName();
        $controller->after();
    }
}
