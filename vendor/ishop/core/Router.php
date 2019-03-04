<?php

namespace ishop;


class Router
{

    protected static $routes = [];
    protected static $route = [];

    public  static function add($regex, $route = []){
        self::$routes[$regex] = $route;
    }

    public static function getRoutes(){
        return self::$routes;
    }

    public static function getRoute(){
        return self::$routes;
    }

    public static function dispatch($url){
        if (self::matchRoute($url)){
            echo "OK";
        }else{
            echo "NOT OK";
        }
    }

    public  static function matchRoute($url){
        return false;
    }
}