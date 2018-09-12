Feature: TestLogout
  In order to finish a session in the system
  As a logged userd
  I need to return to the home page

  Scenario: see the page's button existance
  When I am on any page
  Then I should see "SALIR"

  Scenario: see home page after pushing salir
  When I am press the button
  Then I should see "SISTEMA DE EVALUACIONES PARA CATEDRATICOS Y AUXILIARES"

  Scenario: proving im logged out
  When I am on any page
  Then I should be able to redirect to the home page

