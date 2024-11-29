<?php


namespace  Tests\Support\StepDefinitions\UserFormStepDef;

use \Codeception\Step\Argument\PasswordArgument;

trait UserformInputFieldValidationStep
{
    /**
     * @Given I am on the User Form page
     */
    public function iAmOnTheUserFormPage()
    {
        $this->amOnPage("/wp-login.php");
        $this->fillField('//input[@type="text"]', "rana");
        $this->fillField('//input[@type="password"]', new PasswordArgument("Pass1234@"));
        $this->checkOption('#rememberme');
        $this->click('//input[@type="submit"]');
        $this->amOnPage("/wp-admin/options-general.php?page=qa-test-settings");
    }

    /**
     * @When I leave all fields empty
     */
    public function iLeaveAllFieldsEmpty()
    {
        $this->fillField("input#qa_test_fullname", "");
        $this->fillField("input#qa_test_nickname", "Rana");
        $this->fillField("input#qa_test_address", "");
        $this->fillField("input#qa_test_dob_d", '32');
        $this->selectOption('select#qa_test_dob_m', "7");  // December
        $this->fillField('input#qa_test_dob_y', "2008");
        $this->fillField("input#qa_test_email", 'wasir@admin.com');
        $this->fillField("input#qa_test_web", 'https://wasir.com');
    }

    /**
     * @When I click the :arg1 button
     */
    public function iClickTheButton($arg1)
    {
        $this->click('//input[@type="submit"]');
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
        $this->see("Full Name is a required field");
    }
}
