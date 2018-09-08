Feature: TeacherProfile
  As system user 
  I want to see Teacher information, be able to qualify, take the survey 
  and see the assigned courses.

  Scenario: Access to the Teacher profile
  When I am on the teacher profile $1 it must exist
  Then I should see "Perfil de catedratico"
  And I should be able to redirect to the qualify area 
  And I should be able to redirect to the survey area
  And I should be able to redirect to the assigned courses area