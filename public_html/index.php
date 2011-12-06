<?php
set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__)."/../app");
set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__)."/../vendor");
set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__)."/../lib");

require 'Slim/Slim.php';

function initialisation() {
    $app = new Slim(array(
        'templates.path' => dirname(__FILE__)."/templates"
    ));


    require 'routes/RessourceAccueil.php';

    $app->run();
}

initialisation();