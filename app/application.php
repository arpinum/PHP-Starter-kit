<?php
require 'Slim/Slim.php';

function initialisation($options)
{
    $configuration = array_merge(
        array(
            'templates.path' => dirname(__FILE__) . "/templates")
        , $options
    );

    $app = new Slim($configuration);
    require 'routes/RessourceAccueil.php';
    $app->run();
}