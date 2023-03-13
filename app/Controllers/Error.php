<?php

namespace App\Controllers;

use App\Helpers\Controller;

class Error extends Controller{

    public function __construct($router) {
        parent::__construct($router, "error");
    }

    public function erro($data) {
        $this->view->addData([
            "title" => "Página não encontrada | " . $data['errcode'],
            "errcode" => $data['errcode'],
            "errorActive" => "active"
        ]);
        echo $this->view->render('not-found');
    }
} 