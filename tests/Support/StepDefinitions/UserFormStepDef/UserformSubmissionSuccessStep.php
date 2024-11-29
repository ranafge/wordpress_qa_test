<?php


namespace  Tests\Support\StepDefinitions\UserFormStepDef;

use \Codeception\Step\Argument\PasswordArgument;
use Tests\Support\Helper\UserFormSelector\UserFormSelector;

trait UserformSubmissionSuccessStep
{

    /**
     *@Given I am on the User Form page for success submission
     */
    public function iAmOnTheUserFormPageForSuccessSubmission()
    {
        $this->amOnPage(UserFormSelector::WP_LOGIN_PAGE);
        $this->fillField(UserFormSelector::WP_USERNAME_FIELD, UserFormSelector::WP_LOGIN_USERNAME);
        $this->fillField(UserFormSelector::WP_LOGIN_PASSWORD_FIELD, UserFormSelector::WP_LOING_PASSWORD);
        $this->click(UserFormSelector::WP_LOGIN_BUTTON);
        $this->amOnPage("/wp-admin/options-general.php?page=qa-test-settings");
    }

    /**
     * @When /^I fill the "Full Name" field with "([^"]*)"$/
     */
    public function iFillTheFullNameFieldWith($value)
    {
        $this->fillField(UserFormSelector::FULL_NAME_FIELD, $value);
    }

    /**
     * @When /^I fill the "Nickname" field with "([^"]*)"$/
     */
    public function iFillTheNicknameFieldWith($value)
    {
        $this->fillField(UserFormSelector::NICK_NAME_FIELD, $value);
    }

    /**
     * @When /^I fill the "Address" field with "([^"]*)"$/
     */
    public function iFillTheAddressFieldWith($value)
    {
        $this->fillField(UserFormSelector::ADDRESS_FIELD, $value);
    }

    /**
     * @When /^I fill the "Date of Birth Day" field with "([^"]*)"$/
     */
    public function iFillTheDateOfBirthDayFieldWith($value)
    {
        $this->fillField(UserFormSelector::BIRTH_DATE_FIELD, $value);
    }

    /**
     * @When /^I select "([^"]*)" from the "Date of Birth Month" dropdown$/
     */
    public function iSelectFromTheDateOfBirthMonthDropdown($value)
    {
        $this->selectOption(UserFormSelector::BIRTH_MONTH_FIELD, $value);
    }

    /**
     * @When /^I fill the "Date of Birth Year" field with "([^"]*)"$/
     */
    public function iFillTheDateOfBirthYearFieldWith($value)
    {
        $this->fillField(UserFormSelector::BIRTH_YEAR_FIELD, $value);
    }

    /**
     * @When /^I fill the "Email Address" field with "([^"]*)"$/
     */
    public function iFillTheEmailAddressFieldWith($value)
    {
        $this->fillField(UserFormSelector::EMAIL_FIELD, $value);
    }

    /**
     * @When /^I fill the "Website" field with "([^"]*)"$/
     */
    public function iFillTheWebsiteFieldWith($value)
    {
        $this->fillField(UserFormSelector::WEBSITE_FIELD, $value);
    }

    /**
     * @When /^I specifically click the "Save Changes" button$/
     */
    public function iClickTheSaveChangesButton()
    {
        $this->click(UserFormSelector::SAVE_CHANGES_BUTTON);
    }

    /**
     * @Then I should see success message :arg1
     */
    public function iShouldSeeSuccessMessage($arg1)
    {
       $this->see($arg1);
    }


}
