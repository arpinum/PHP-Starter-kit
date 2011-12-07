<?php

class TestWeb extends PHPUnit_Framework_TestCase
{
    public function instanceSlim()
    {
        return Slim::getInstance();
    }

    public function verifieRenduContient($attendu)
    {
        $this->assertThat($this->instanceSlim()->view()->rendu, $this->stringContains($attendu));
    }
}