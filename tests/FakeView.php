<?php

class FakeView extends Slim_View
{
    public function display($template)
    {
        $this->template = $template;
        $this->rendu = $this->render($template);
    }


    public $rendu;
    public $template;
}
