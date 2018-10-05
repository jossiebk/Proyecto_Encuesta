Feature: AssistantDashboard
  In order to verify the assistant Dashboard
  As an assistant
  I need to prove the assistant dashboard page


 Scenario: See the assistant title page
 When i am on the assistant dashboard page
 Then I should see "dashboard de auxiliar"

 Scenario: Upload assistant resume
 When i am on the assistant dashboard page
 And I click the curriculum button
 Then I should be on the resume page
 And I should see "CARGA AUXILIARES"

