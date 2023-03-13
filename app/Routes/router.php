<?php

use CoffeeCode\Router\Router;

$router = new Router(SITE['url']);

$router->namespace("App\\Controllers");

$router->get("/", "Home:home", "home.home");
$router->get("/entrar", "Home:login", "home.login");

$router->group("oops");
$router->get("/{errcode}", "Error:erro", "error.erro");

$router->dispatch();

if($router->error()) {
    $router->redirect("/oops/{$router->error()}");
}
