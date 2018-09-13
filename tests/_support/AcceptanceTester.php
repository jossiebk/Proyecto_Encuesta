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
<<<<<<< HEAD
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
     * @When I am on the assistantReview page $:num1 it must exist
     */
     public function iAmOnTheAssistantReviewPageItMustExist($num1)
     {
         $this->amOnPage("/AuxReview/$num1");
         $this->SeeResponseCodeIs(200);
     }

}
