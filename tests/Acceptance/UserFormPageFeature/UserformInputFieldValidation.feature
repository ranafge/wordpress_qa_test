Feature: User Form Input Field Validation
  As a user
  I want to be validated on form inputs
  So that I can correctly fill the user form

  Scenario: Validate empty fields
    Given I am on the User Form page
    When I leave all fields empty
    And I click the "Save Changes" button
    Then I should see "Full Name is a required field"
    And I should see "Address is a required field"

