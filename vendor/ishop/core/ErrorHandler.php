<?php
/**
 * Created by PhpStorm.
 * User: Асылжан
<<<<<<< HEAD
 * Date: 02.03.2019
 * Time: 9:20
=======
 * Date: 01.03.2019
 * Time: 16:06
>>>>>>> 9f77eff333089e34e4fa8536d99745af035f8a6f
 */

namespace ishop;


class ErrorHandler
{
    public function __construct(){
        if (DEBUG){
            error_reporting(1);
        }else{
            error_reporting(0);
        }

        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($e){
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected  function logErrors($message = '', $file = '', $line = ''){
        error_log("[" .date('Y-m-d H:i:s') ."] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line} \n==========================================\n", ROOT . '/tmp/errors.log');
    }

    protected function displayError($err_num, $err_str, $err_file, $err_line, $responce = 404){
        http_response_code($responce);
        if ($responce == 404 && !DEBUG){
            require WWW . "/errors/404.php";
            die;
        }

        if (DEBUG){
            require WWW . "/errors/dev.php";
        }else{
            require WWW . "/errors/prod.php";
        }

        die;
    }


}