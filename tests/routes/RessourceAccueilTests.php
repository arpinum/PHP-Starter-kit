<?php

use routes\RessourceAccueil;

class RessourceAccueilTests extends TestWeb
{
    function testPeutFaireDesChoses()
    {
        \routes\RessourceAccueil::represente($this->instanceSlim());

        $this->verifieRenduContient("Jean-Baptiste Dusseaut");
    }

}
