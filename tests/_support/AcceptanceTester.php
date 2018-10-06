<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/

class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */

       /**
     * @When I am on the homepage
     */
     public function iAmOnTheHomepage()
     {
     	$this->amOnPage('/');
     }

    /**
     * @Then I should see :arg1
     */
     public function iShouldSee($arg1)
     {
         $this->see($arg1);
     }

    /**
     * @When I am on the page student dashboard
     */
     public function iAmOnThePageStudentDashboard()
     {
         $this->amOnPage('/dash');
         $this->SeeResponseCodeIs(200);
     }

    /**
     * @When I am on the teacher profile :arg1 it must exist
     */
     public function iAmOnTheTeacherProfileItMustExist($num1)
     {
         $this->amOnPage("/perCat/$num1");
         $this->SeeResponseCodeIs(200);
     }

    /**
     * @Then I should be able to redirect to the qualify area
     */
     public function iShouldBeAbleToRedirectToTheQualifyArea()
     {
         $this->amOnPage('/teacherReview/1');
         $this->SeeResponseCodeIs(200);
     }

    /**
     * @Then I should be able to redirect to the survey area
     */
     public function iShouldBeAbleToRedirectToTheSurveyArea()
     {
         $this->amOnPage('/teacher_form/1');
         $this->SeeResponseCodeIs(200);
     }

    /**
     * @Then I should be able to redirect to the assigned courses area
     */
     public function iShouldBeAbleToRedirectToTheAssignedCoursesArea()
     {
         $this->amOnPage('/ProfileCourse/1');
         $this->SeeResponseCodeIs(200);
     }

     /**
     * @When I am on the page assistant dashboard
     */
     public function iAmOnThePageAssistantDashboard()
     {
          $this->amOnPage('/assistantProfile/1');
          
     }

     /**
     * @When I am on any page
     */
     public function iAmOnAnyPage()
     {
         $this->amOnPage('/teacher_form/1');
     }

    /**
     * @When I press the button
     */
     public function iPressTheButton()
     {
         $this->amOnPage('/');
     }

     /**
     * @Given I am on the login page
     */
     public function iAmOnTheLoginPage()
     {
         $this->amOnPage('/login');
     }

    /**
     * @When I type :arg1 in the username input field
     */
     public function iTypeInTheUsernameInputField($arg1)
     {
         $this->fillField('email', $arg1);
     }

    /**
     * @When I type :arg1 in the password input field
     */
     public function iTypeInThePasswordInputField($arg1)
     {
         $this->fillField('password', $arg1);
     }

    /**
     * @When I click the login button
     */
     public function iClickTheLoginButton()
     {
         $this->click('Submit');
     }

    /**
     * @Then I should be on the welcome page
     */
     public function iShouldBeOnTheWelcomePage()

     {
         $this->amOnPage('/');
     }

    /**
     * @Then I should be on the login page
     */
     public function iShouldBeOnTheLoginPage()
     {
         $this->seeCurrentUrlEquals('/login');
     }

      /**
     * @When I am on the assistantReview page $:num1 it must exist
     */
     public function iAmOnTheAssistantReviewPageItMustExist($num1)
     {
         $this->amOnPage("/AuxReview/$num1");
         $this->SeeResponseCodeIs(200);
     }


      /**
     * @Then I should see in field opinion :arg1
     */
     public function iShouldSeeInFieldOpinion($arg1)
     {
         $this->seeInField('form textarea[name=opinion]',$arg1);
     }

     /**
     * @Then I should see in field  segundaopinion :arg1
     */
     public function iShouldSeeInFieldSegundaopinion($arg1)
     {
         $this->seeInField('form textarea[name=opinion2]',$arg1);
     }

      /**
     * @When :arg1 has :arg2
     */
     public function has($arg1, $arg2)
     {
         $this->fillField($arg1,$arg2);
     }

    /**
     * @When :arg1 hasnumber $:num1
     */
     public function hasnumber($num1, $arg1)
     {
         $this->fillField($num1,$arg1);
     }


    /**
     * @Then I must be able to submit my qualification
     */
     public function iMustBeAbleToSubmitMyQualification()
     {
        $this->click('Guardar');
     }

// BDD jossie - luis

      /**
     * @When I am on the assistant dashboard, assistant $:num1 it must exist
     */
     public function iAmOnTheAssistantDashboardAssistantItMustExist()
     {
         $this->amOnPage("/AssistantDashboard/");
         $this->SeeResponseCodeIs(200);
     }


    /**
     * @When i am on the assistant dashboard page
     */
     public function iAmOnTheAssistantDashboardPage()
     {
        $this->amOnPage('/login');
        $this->fillField('email', 'assistant1@mail.com');
        $this->fillField('password', '123456');
        $this->click('Submit');
        $this->amOnPage("/AssistantDashboard/");
         $this->SeeResponseCodeIs(200);
     }

    /**
     * @When I click the curriculum button
     */
     public function iClickTheCurriculumButton()
     {
        $this->click('Cargar Curriculum');    
     }         

    /**
     * @Then I should be on the resume page
     */
     public function iShouldBeOnTheResumePage()
     {
        $this->amOnPage("/LoadAssistant/1");
         $this->SeeResponseCodeIs(200);   
     }

    /**
     * @When I am on the LoadAssistant page $:num1 it must exist
     */
     public function iAmOnTheLoadAssistantPageItMustExist($num1)
     {
        $this->amOnPage("/LoadAssistant/1");
         $this->SeeResponseCodeIs(200);   // throw new \Codeception\Exception\Incomplete("Step `I am on the LoadAssistant page $:num1 it must exist` is not defined");
     }

    /**
     * @Then I must be able to submit my information
     */
     public function iMustBeAbleToSubmitMyInformation()
     {
                $this->click('Guardar');    
       //  throw new \Codeception\Exception\Incomplete("Step `I must be able to submit my information` is not defined");
     }

     /*BDD-Diego-Michi*/
     /*BDD-201318633-201318570*/

    /**
     * @Given I am on my dashboard
     */
     public function iAmOnMyDashboard()
     {
        $this->amOnPage("/AssistantDashboard");
     }

    /**
     * @When I click the update academic info
     */
     public function iClickTheUpdateAcademicInfo()
     {
        $this->click("Informacion Academica");
     }

    /**
     * @Then I should see a modal
     */
     public function iShouldSeeAModal()
     {
        $this->see('Cancelar','#exampleModal');
        $this->see('Guardar','#exampleModal');
     }

    /**
     * @Then I should see :arg1 in the modal :arg2
     */
     public function iShouldSeeInTheModal($arg1, $arg2)
     {
        if($arg2=='Modal1')
            $this->see($arg1, '#exampleModal');
        else
            $this->see($arg1, '#exampleModal2');
     }

    /**
     * @When I click the update work experience
     */
     public function iClickTheUpdateWorkExperience()
     {
        $this->click("Informacion Laboral");
     }


}
