<?php

declare(strict_types=1);

namespace Tests\Support\Page\Functional;

class Login
{
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public $usernameField = '#username';
     * public $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * @var \Tests\Support\FunctionalTester;
     */
    protected $functionalTester;

    public function __construct(\Tests\Support\FunctionalTester $I)
    {
        $this->functionalTester = $I;
        // you can inject other page objects here as well
    }

}
