Feature: Testing for login page

	Scenario: Login with valid credentials
		Given I am on the login page
		When I type "student1@mail.com" in the username input field
		And I type "123456" in the password input field
		And I click the login button
		Then I should be on the welcome page
		And I should see "Bienvenido"

	Scenario: Login with bad password
		Given I am on the login page
		When I type "student1@mail.com" in the username input field
		And I type "123456789" in the password input field
		And I click the login button
		Then I should be on the login page
		And I should see "These credentials do not match our records"

	Scenario: Login without password
		Given I am on the login page
		When I type "student1" in the username input field
		And I click the login button
		Then I should be on the login page

	Scenario: Login as a teacher
		Given I am on the login page
		When I type "teacher1@mail.com" in the username input field
		And I type "123456" in the password input field
		And I click the login button
		Then I should be on the welcome page
		And I should see "Bienvenido profesor"

	Scenario: Login as a assistant
		Given I am on the login page
		When I type "assistant1@mail.com" in the username input field
		And I type "123456" in the password input field
		And I click the login button
		Then I should be on the welcome page
		And I should see "Bienvenido auxiliar"


