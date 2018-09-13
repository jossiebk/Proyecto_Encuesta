Feature: qualifyAssistant
  As a student 
  I want to be able to see the qualification of the assistant
  and comment the positive and the negative about them
  and be able to submit the qualification.

  Scenario: Access to the assistant qualification
  When I am on the assistantReview page $1 it must exist
  Then I should see "Calificar Auxiliar"
