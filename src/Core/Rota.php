<?php

namespace MovieApp\Core;

class Rota {
    public $path;
    public $method;
    public $controller;
    public $action;

    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';

    public static function get() {
        $rota = new Rota();
        $rota->method = Rota::GET;
        return $rota;
    }
    public static function post() {
        $rota = new Rota();
        $rota->method = Rota::GET;
        return $rota;
    }
    public static function put() {
        $rota = new Rota();
        $rota->method = Rota::GET;
        return $rota;
    }
    public static function delete() {
        $rota = new Rota();
        $rota->method = Rota::GET;
        return $rota;
    }

    public function path($path){
        $this->path = $path;
        return $this;
    }
    
    public function controller($controller){
        $this->controller = $controller;
        return $this;
    }
    
    public function action($action){
        $this->action = $action;
        return $this;
    }
}