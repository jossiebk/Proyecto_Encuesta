Feature: AdministrativeDashboard
  In order to verify the Administrative Dashboard
  As a administrative user
  I need to prove the administrative Dashboard

  Scenario: see the administrative title page
  When i am on the administrative dashboard page
  Then I should see "Dashboard administrativo"

  Scenario: see the course upload button
  When i am on the administrative dashboard page
  And I click the "agregar curso" button
  Then I should see "Ingrese informacion del curso"

  Scenario: see the assistant upload button
  When i am on the administrative dashboard page
  And I click the "agregar auxiliar" button
  Then I should see "Ingrese informacion para el auxiliar"

  Scenario: see the teacher upload button
  When i am on the administrative dashboard page
  And I click the "agregar catedratico" button
  Then I should see "Ingrese informacion para el catedratico"

  Scenario: see the student upload button
  When i am on the administrative dashboard page
  And I click the "agregar estudiante" button
  Then I should see "Ingrese informacion para el estudiante"

  Scenario: see the modification course button
  When i am on the administrative dashboard page
  And I click the "modificar curso" button
  Then I should see "Ingrese informacion para el curso a modificar"

  Scenario: see the modification assistant button
  When i am on the administrative dashboard page
  And I click the "modificar auxiliar" button
  Then I should see "Ingrese informacion para el auxiliar a modificar"

  Scenario: see the course elimination button
  When i am on the administrative dashboard page
  And I click the "eliminar curso" button
  Then I should see "Elija el curso a eliminar"

  Scenario: see the teacher elimination button
  When i am on the administrative dashboard page
  And I click the "eliminar catedratico" button
  Then I should see "Elija el catedratico a eliminar"

  Scenario: see the assistant elimination button
  When i am on the administrative dashboard page
  And I click the "eliminar auxiliar" button
  Then I should see "Elija el auxiliar a eliminar"