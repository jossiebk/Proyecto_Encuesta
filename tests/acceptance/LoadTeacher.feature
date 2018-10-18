Feature: LoadTeacher
  As a administrative user
  I need to create a new user for a teacher 
  and his information about tittles and work experience.


Scenario: see the teacher upload button
  When i am on the administrative dashboard page
  And I click the "agregar catedratico" button
  Then I should see "Ingrese informacion para el catedratico"
  And I should see "Nombre"  
  And I should see "Correo" 
  And I should see "Contraseña" 
  And I should see "Cumpleaños" 
  And I should see "Descripción" 
  And I should see "Titulo 1" 
  And I should see "Titulo 2" 
  And I should see "Titulo 3"
  And I should see "Experiencia 1" 
  And I should see "Experiencia 2" 
  And I should see "Experiencia 3" 
  And I should see "Referencia"   