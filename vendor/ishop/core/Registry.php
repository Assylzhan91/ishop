<?php
/**
 * Created by PhpStorm.
 * User: Асылжан
 * Date: 01.03.2019
 * Time: 11:15
 */

namespace ishop;


class Registry
{
    use TSingletone;


    protected static $properties = [];

    public function setProperty($name, $value){
        self::$properties[$name] = $value;
    }

    public function getProperty($name){

        if (isset(self::$properties[$name])){

            return self::$properties[$name];

        }

        return null;
    }


    public function getProperties(){

        return self::$properties;

    }

}