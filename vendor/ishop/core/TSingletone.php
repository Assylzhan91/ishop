<?php
/**
 * Created by PhpStorm.
 * User: Асылжан
 * Date: 01.03.2019
 * Time: 11:21
 */

namespace ishop;


trait TSingletone
{
    private static $instance;

    public static function instance(){
        if (self::$instance === null){
            self::$instance = new self;
        }

        return self::$instance;
    }
}