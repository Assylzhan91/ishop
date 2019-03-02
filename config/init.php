<?php
define("DEBUG", 0);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . "/public");
define("APP", ROOT . "/app");
define("CORE", ROOT . "/vendor/ishop/core");
define("LIBS", ROOT . "/vendor/ishop/core/libs");
define("CACHE", ROOT . "/tmp/cache");
define("CONFIG", ROOT . "/config");
define("LAYOUT", "default");
define('HTTPS_SERVER', 'http://ishop');

// http://localhost/ishop/public/index.php
$app_path  = "http://{$_SERVER['HTTP_HOST']}{$_SERVER["PHP_SELF"]}";

// http://localhost/ishop/public/
$app_path = preg_replace("#[^/]+$#","", $app_path);

// http://localhost/ishop/

$app_path = str_replace("/public/", "", $app_path);

// http://ishop/
$app_path = str_replace("/localhost", "", $app_path);

define("PATH", $app_path);
define("ADMIN", PATH.  "/admin");


require_once ROOT . "/vendor/autoload.php";