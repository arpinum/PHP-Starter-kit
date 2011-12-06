<?php

namespace routes;

class RessourceAccueil {
    static function represente($app) {
        $app->render("accueil.php", array('nom' => "Jean-Baptiste Dusseaut"));
    }
}


$app->get('/', function() use($app) {
    RessourceAccueil::represente($app);
});
