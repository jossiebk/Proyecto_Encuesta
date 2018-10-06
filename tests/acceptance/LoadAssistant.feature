Feature: LoadAssistant
  As a assistant
  I want to be able to see the form of the assistant
  and I should see the instructions
  and be able to see the submit button.

  Scenario: Be able to change assistant information
  When I am on the LoadAssistant page $1 it must exist
  And "birthdate" has "01/01/2000"
  And "credits" has "100"
  And "personal_description" has ""
  And "academic_experience_1" has "Titulo 1"
  And "academic_experience_2" has "Titulo 2"
  And "academic_experience_3" has "Titulo 3"
  And "work_experience_1" has "Trabajo 1"
  And "work_experience_2" has "Trabajo 2"
  And "work_experience_3" has "Trabajo 3"  
  And "references" has "Referencias"          
  Then I must be able to submit my information  