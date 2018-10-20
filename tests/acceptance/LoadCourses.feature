Feature: LoadCourses
  As a administrative user
  I need to create a new course for the users 
  and its information.


Scenario: see the course upload button
  When i am on the administrative dashboard page
  And I click the "agregar curso" button
  Then I should see "Ingrese informacion del curso"
  And I should see "Nombre"  
  And I should see "Codigo" 
  And I should see "Descripcion" 
  And I should see "Escuela" 
  And I should see "Facultad" 
  And I should see "Unidad Academica"


