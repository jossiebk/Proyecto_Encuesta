Feature: AssistantResults
  In order to see the assistant results
  As a user of the system
  I need to see some results.

  Scenario: see the existance of the assistant result pop up view
  Given I am on the assistant dashboard
  When I click the evaluation results button
  Then I should see a modal 
  And I should see "Resultado de sus evaluaciones"
  And I should see "Puntualidad"
  And I should see "Dominio de los temas"
  And I should see "Presentacion"
  And I should see "Entrega de notas"
  And I should see "Asistencia"
  And I should see "Aceptar"




