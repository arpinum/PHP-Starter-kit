<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__));
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . "/../");
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . "/../app");
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . "/../vendor");
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . "/../lib");

spl_autoload_register(function($className)
{
    if (strpos($className, 'Slim')===0) {
        return;
    }
    $file = str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";
    require_once(str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php");
});

require_once "application.php";



initialisation(array('view'=> new FakeView()));
