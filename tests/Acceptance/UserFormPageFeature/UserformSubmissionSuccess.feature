Feature: User Form Validation and Submission
  As a user
  I want to fill in and submit the user form
  So that I can update my profile successfully

  Scenario: Successful form submission
    Given I am on the User Form page for success submission
    When I fill the "Full Name" field with "John Doe"
    And I fill the "Nickname" field with "Johnny"
    And I fill the "Address" field with "123 Main St"
    And I fill the "Date of Birth Day" field with "15"
    And I select "May" from the "Date of Birth Month" dropdown
    And I fill the "Date of Birth Year" field with "1990"
    And I fill the "Email Address" field with "john.doe@example.com"
    And I fill the "Website" field with "https://johndoe.com"
    And I click the "Save Changes" button
    Then I should see success message "Settings Saved."


