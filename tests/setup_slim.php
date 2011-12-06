<?php
set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__)."/../");

spl_autoload_register(function($className) {
    echo $className;
    $file = str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";
    if(file_exists($file)) {
        require_once(str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php");
    }
});

require_once "public_html/index.php";