<?php

namespace App\Helpers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller {

    protected $router;
    protected $view;

    public function __construct($router, $path) {
        $this->router = $router;

        $this->view = new Engine(dirname(__DIR__, 2) . "/views/$path", "php");
        $this->view->addData([
            "router" => $this->router
        ]);
    }

}