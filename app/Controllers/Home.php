<?php

namespace App\Controllers;

use App\Helpers\Controller;

class Home extends Controller{

    public function __construct($router) {
        parent::__construct($router, "home");
    }

    public function home() {
        $this->view->addData([
            "title" => "Página inical",
            "homeActive" => "active"
        ]);
        echo $this->view->render('home');
    }

    public function login() {
        $this->view->addData([
            "title" => "Faça Login para Entrar",
            "loginActive" => "active"
        ]);
        echo $this->view->render('login');
    }
}