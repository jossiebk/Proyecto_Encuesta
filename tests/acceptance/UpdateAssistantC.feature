Feature: UpdateAssistantC
  In order to update the academic and work experience
  As a assistant
  I need to change my information

  	Scenario: Change my accademic experience
		Given I am on my dashboard
		When I click the update academic info
		Then I should see a modal
		And I should see "Ingrese su informacion academica" in the modal "Modal1"

	Scenario: Change my work experience
		Given I am on my dashboard
		When I click the update work experience
		Then I should see a modal
		And I should see "Ingrese su informacion laboral" in the modal "Modal2"