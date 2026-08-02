<?php

namespace bng\System;

Use bng\Controllers\Main;
Use Exception;

class Router{
    public static function dispatch(){
        //main route values
        $httpverb = $_SERVER['REQUEST_METHOD'];
        $controller = 'main';
        $method = 'index';

        //check URI parameters
        if(isset($_GET['ct'])){
            $controller = $_GET['ct'];
        }

        if(isset($_GET['mt'])){
            $method = $_GET['mt'];
        }

        //method parameters
        $parameters = $_GET;

        //remove controller from parameters
        if(key_exists("ct", $parameters)){
            unset($parameters['ct']);
        }

        if(key_exists("mt", $parameters)){
            unset($parameters['mt']);
        }

        /*var_dump($httpverb);
        var_dump($controller);
        var_dump($method);
        var_dump($parameters);*/

        //tries to instanciate the controller and execute the method
        try{
            $class = "bng\Controllers\\$controller";
            $controller = new $class();
            $controller->$method(...$parameters);
        }catch(Exception $err){
            die($err->getMessage());
        }
    }
}