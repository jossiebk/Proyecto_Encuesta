Feature: StudentDashboard
  In order to verify the students dashboard
  As a student
  I need to prove the students dashboard page

  Scenario: see the page's title
  When I am on the page student dashboard
  Then I should see "Dashboard Estudiantes"

  Scenario: see the search teacher option
  When I am on the page student dashboard
  Then I should see "Buscar catedratico o auxiliar"

  Scenario: see the option to list assistants
  When I am on the page student dashboard
  Then I should see "Listar auxiliares"

  Scenario: see the option to list teachers
  When I am on the page student dashboard
  Then I should see "Listar catedraticos"