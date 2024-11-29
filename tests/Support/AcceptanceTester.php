<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
 */

namespace Tests\Support;

use Tests\Support\StepDefinitions\UserFormStepDef\UserformInputFieldValidationStep;
use Tests\Support\StepDefinitions\UserFormStepDef\UserformSubmissionSuccessStep;
use Tests\Support\StepDefinitions\UserFormStepDef\UserFormInputFieldForMultipleDataSetStepDef;

class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;
    use UserformInputFieldValidationStep;
    use UserformSubmissionSuccessStep;
    use UserFormInputFieldForMultipleDataSetStepDef;


    /**
     * Define custom actions here
     */
}
