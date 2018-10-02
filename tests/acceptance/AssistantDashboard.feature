Feature: AssistantDashboard
  In order to verify the assistant Dashboard
  As an assistant
  I need to prove the assistant dashboard page


 Scenario: See the assistant title page
 When I am on the assistant dashboard, assistant $1 it must exist
 Then i should see "dashboard de auxiliar"

 Scenario: Upload assistant resume
 When i am on the assistant dashboard page
 And I click the curriculum button
 Then I should be on the resume page
 And I should see "Cargar curriculum"

