<?php

/*
 * App core class
 * Create URL & load controller
 * URL Format - /controller/method/parameters
 */

class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        // Check if $url is not empty and the first element exists
        if (!empty($url) && isset($url[0])) {
            // Look in controllers for the first value
            $controllerFile = '../app/controllers/' . ucwords($url[0]) . '.php';

            if (file_exists($controllerFile)) {
                // If exists, set as controller
                $this->currentController = ucwords($url[0]);
                // Unset 0 Index
                unset($url[0]);
            } else {
                // Handle the case where the controller file does not exist
                die('Controller file not found.');
            }
        }

        // Require the controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        // Instantiate controller class
        $this->currentController = new $this->currentController;

        // Check for the second part of the URL
        if (!empty($url[1])) {
            // Check if the method exists in the controller
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                // Unset 1 Index
                unset($url[1]);
            } else {
                // Handle the case where the method does not exist
                die('Method not found.');
            }
        }

        // Get parameters
        $this->params = $url ? array_values($url) : [];

        // Call a callback with an array of parameters
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

        return [];
    }
}
