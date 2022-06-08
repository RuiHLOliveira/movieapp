<?php

namespace MovieApp\Core;

use MovieApp\Controller\FilmesController;
use MovieApp\Controller\GenerosController;

class Router
{
    public $rotas;

    public function __construct() {
        $this->rotas = [];
        $this->listagemRotas();
    }

    public function add ($rota) {
        $this->rotas[] = $rota;
    }

    public function listagemRotas () {
        $this->add(Rota::get()->path('/filmes')->controller(FilmesController::class)->action('index'));
        $this->add(Rota::get()->path('/generos')->controller(GenerosController::class)->action('index'));
    }


    public function match($method, $uri) {
        foreach ($this->rotas as $key => $rota) {
            if($rota->method == $method && $rota->path == $uri)
                return ['controller' => $rota->controller, 'action' => $rota->action];
        }
    }

}
