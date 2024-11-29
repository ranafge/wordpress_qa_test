<?php

namespace Tests\Support\StepDefinitions\UserFormStepDef;

use \Codeception\Step\Argument\PasswordArgument;
use Tests\Support\Helper\UserFormSelector\UserFormSelector;

use Codeception\Attribute\Given;
use Codeception\Attribute\When;
use Codeception\Attribute\Then;
use Behat\Gherkin\Node\TableNode;

trait UserFormInputFieldForMultipleDataSetStepDef
{
   
    #[Given('I am on the user form page for input multipole data sets')]
    public function iAmOnTheUserFormPageForInputMultipleDataSets()
    {
         $this->amOnPage('/wp-login.php');
         $this->fillField('//input[@type="text"]', "rana");
         $this->fillField('//input[@type="password"]', new PasswordArgument("Pass1234@"));
         $this->checkOption('#rememberme');
         $this->click('//input[@type="submit"]');
         $this->amOnPage("/wp-admin/options-general.php?page=qa-test-settings");
    }

    #[When('I fill in the form with the following details:')]
    public function iFillInTheFormWithTheFollowingDetails(TableNode $table)
    {
        foreach ($table->getRows() as $index => $row) {
            if ($index == 0) {
                // skip header row
                continue;
            }

            [$field, $value] = $row;

            $fieldSelectors = [
                "Full Name"           => UserFormSelector::FULL_NAME_FIELD,
                "Nickname"            => UserFormSelector::NICK_NAME_FIELD,
                "Address"             => UserFormSelector::ADDRESS_FIELD,
                "Date of Birth Day"   => UserFormSelector::BIRTH_DATE_FIELD,
                "Date of Birth Month" => UserFormSelector::BIRTH_MONTH_FIELD,
                "Date of Birth Year"  => UserFormSelector::BIRTH_YEAR_FIELD,
                "Email Address"       => UserFormSelector::EMAIL_FIELD,
                "Website"             => UserFormSelector::WEBSITE_FIELD,
            ];
            if (isset($fieldSelectors[$field])) {
                if ($field == 'Date of Birth Month') {
                     $this->selectOption($fieldSelectors[$field], $value);
                } else {
                     $this->fillField($fieldSelectors[$field], $value);
                }
            } else {
                throw new \Exception("Field '$field' not found in from selectors. ");
            }
        }
    }
    #[When('I click on "Save Changes" button for multipole data set')]
    public function iClickOnSaveChangesButtonForMultipleDataSet()
    {
         $this->click(UserFormSelector::SAVE_CHANGES_BUTTON);
         $this->wait(1);
    }

    #[Then('I should see a confirmation message Settings Saved for multipole data set')]
    public function iShouldSeeAConfirmationMessageSettingsSavedForMultipleDataSet()
    {
         $this->see(UserFormSelector::SAVE_CHANGES_TEXT);
         $this->wait(1);
    }
}
