<?php

namespace Tests\Support\Helper;

class MyExtendedSelenium extends \Codeception\Module\WebDriver
{
    public function click($link, $context=null): void
    
    { 
        $this->debug("Attempting to click: $link");
        // call the parent method

        parent::click($link, $context);

        // Custom lock after click
        $this->debug('Click action is completed.');

    }
       
    
}
