Feature: LoadAssistantToDB
  As a administrator
  I must be able to upload a new assistant to the 
  database with all the required fields

  Scenario: Be able to create an assistant in DB
  When i am on the administrative dashboard page
  And I click the "agregar auxiliar" button
  And "birthdate" has "01/01/2018"
  And "credits" has "200"
  And "personal_description" has "I AM"
  And "academic_experience_1" has "Titulo 1"
  And "academic_experience_2" has "Titulo 2"
  And "academic_experience_3" has "Titulo 3"
  And "work_experience_1" has "Trabajo 1"
  And "work_experience_2" has "Trabajo 2"
  And "work_experience_3" has "Trabajo 3"  
  And "references" has "Referencias"
  And user_id has selected $4     
  Then I must be able to submit my information 