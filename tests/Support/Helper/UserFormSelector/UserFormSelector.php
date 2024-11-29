<?php

namespace Tests\Support\Helper\UserFormSelector;

class UserFormSelector
{
    // Define the selectors as constants or public static properties
    const WP_LOGIN_PAGE = "/wp-login.php";
    const WP_USERNAME_FIELD = "#user_login";
    const WP_LOGIN_USERNAME =  "rana";
    const WP_LOGIN_PASSWORD_FIELD = "#user_pass";
    const WP_LOING_PASSWORD = "Pass1234@";
    const WP_LOGIN_BUTTON = "#wp-submit";
    const FULL_NAME_FIELD = '#qa_test_fullname';
    const FULL_NAME = "Jhon";
    const NICK_NAME_FIELD = '#qa_test_nickname';
    const NICK_NAME = "Doe";
    const ADDRESS_FIELD = '#qa_test_address';
    const ADDRESS = "123 street CA";
    const BIRTH_DATE_FIELD = '#qa_test_dob_d';
    const BIRTH_DATE = "22";
    const BIRTH_MONTH_FIELD = '#qa_test_dob_m';
    const BIRTH_MONTH = "12";
    const BIRTH_YEAR_FIELD = '#qa_test_dob_y';
    const BIRTH_YEAR = "1980";
    const EMAIL_FIELD = '#qa_test_email';
    const EMAIL = "jhon.doe@gmail.com";
    const WEBSITE_FIELD = '#qa_test_web';
    const WEBSITE = "https://jhondoe.com";
    const SAVE_CHANGES_BUTTON = 'input[type="submit"]';
    const SAVE_CHANGES_TEXT = "Settings saved.";
}
