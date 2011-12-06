<?php

use routes\RessourceAccueil;

class RessourceAccueilTests extends PHPUnit_Extensions_OutputTestCase
{
    function testPeutFaireDesChoses()
    {
        $reponse = \routes\RessourceAccueil::represente(Slim::getInstance());


        $this->expectOutputRegex("*Jean-Baptiste Dusseaut*");
    }
}
