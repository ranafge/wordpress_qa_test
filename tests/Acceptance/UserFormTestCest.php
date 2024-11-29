<?php


namespace Tests\Acceptance;

use Codeception\Step\Skip;
use Tests\Support\AcceptanceTester;
use \Codeception\Step\Argument\PasswordArgument;




class UserFormTestCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage("/wp-login.php");
        $I->fillField('//input[@type="text"]', "rana");
        $I->fillField('//input[@type="password"]', new PasswordArgument("Pass1234@"));
        $I->click('//input[@type="submit"]');
    }

    // /**
    //  * @skip This is skinping no need to execute
    //  */
    public function tryToTestOptionGeneralPageGeneralSettingsText(AcceptanceTester $I)
    {
        $I->wantToTest("In the options-general page, I want to see General Settings text.");
        $I->amOnPage("/wp-admin/options-general.php");
        $I->see("General Settings");
    }

    // /**
    //  * @skip this is skipped.
    //  */
    public function tryToTestOptionGeneralPageQaTestText(AcceptanceTester $I)
    {

        $I->wantToTest("I want to check for the 'QA Test' text on the Options General QA Test settings page.");
        $I->amOnPage("/wp-admin/options-general.php?page=qa-test-settings");
        $I->wait(1);
        $I->see("QA Test");
    }

    /**
     * Summary of tryToTestFillUserFormTestSettingsSavedText
     * @param \Tests\Support\AcceptanceTester $I
     * @return void
     * @Skip
     */
    public function tryToTestFillUserFormTestSettingsSavedText(AcceptanceTester $I)
    {


        $I->wantToTest("I want to check for 'Settings saved.' text on the Options General QA Test settings page.");
        $I->amOnPage("/wp-admin/options-general.php?page=qa-test-settings");
        $I->wait(1);
        $I->maximizeWindow();
        $I->fillField("input#qa_test_fullname", "Wasir ");
        $I->fillField("input#qa_test_nickname", "Islam");
        $I->fillField("input#qa_test_address", "Durgapur");
        $I->fillField("input#qa_test_dob_d", '4');
        $I->selectOption('select#qa_test_dob_m', "7");
        $I->fillField('input#qa_test_dob_y', "2008");
        $I->fillField("input#qa_test_email", 'wasir@admin.com');
        $I->fillField("input#qa_test_web", 'https://wasir.com');
        $I->executeJS("document.querySelector('#qa_test_fullname').dispatchEvent(new Event('change', { bubbles: true }));");
        $I->executeJS("document.querySelector('#qa_test_address').dispatchEvent(new Event('change', { bubbles:true }));");
        $I->executeJS("document.querySelector('#qa_test_email').dispatchEvent(new Event('change', { bubbles: true }));");
        $I->click('//input[@type="submit"]');
        $I->waitForText("Settings saved.", 1);
    }
}
