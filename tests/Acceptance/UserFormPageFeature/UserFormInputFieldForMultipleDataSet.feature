Feature: User Form Submission for multipole data sets
  In order to test the functionality of the user form
  As a user
  I need to fill out the form with various sets of data and save changes

  Scenario Outline: Fill out the user form with different values
    Given I am on the user form page for input multipole data sets
    When I fill in the form with the following details:
      | field               | value               |
      | Full Name           | John Doe            |
      | Nickname            | Doe                 |
      | Address             | 120 Main Street     |
      | Date of Birth Day   | 15                  |
      | Date of Birth Month | May                 |
      | Date of Birth Year  | 1990                |
      | Email Address       | Jane.doe@test.com   |
      | Website             | https://johndoe.com |
    When I fill in the form with the following details:
      | field               | value                 |
      | Full Name           | Bold                  |
      | Nickname            | Smith                 |
      | Address             | 121 Main Street       |
      | Date of Birth Day   | 20                    |
      | Date of Birth Month | March                 |
      | Date of Birth Year  | 1988                  |
      | Email Address       | bold.Smith@test.com   |
      | Website             | https://boldsmith.com |


    When I click on "Save Changes" button for multipole data set
    Then I should see a confirmation message Settings Saved for multipole data set

    Examples:
      | full_name | nickname | address         | dob_day | dob_month | dob_year | email               | website               |
      | Jane      | Doe      | 120 Main Street | 15      | May       | 1990     | Jane.doe@test.com   | https://johndoe.com   |
      | Bold      | Smith    | 121 Main Street | 20      | March     | 1988     | bold.Smith@test.com | https://boldsmith.com |
