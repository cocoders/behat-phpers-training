<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Model\Task;
use Model\TaskList;

/**
 * Defines application features from the specific context.
 */
class OnlineFeatureContext extends \Behat\MinkExtension\Context\MinkContext
{
    public function __construct()
    {
    }

    /**
     * @Given pustą listę tasków
     */
    public function pustaListeTaskow()
    {
        (new \Infrastructure\File\TaskList())->clear();
    }

    /**
     * @When dodam nowego taska o treści :taskContent
     */
    public function dodamNowegoTaskaOTresci($taskContent)
    {
        $this->visit('/');
        $this->fillField('content', $taskContent);
        $this->pressButton('Zapisz');
    }

    /**
     * @Then na liście powinien być :arg1 task
     */
    public function naLisciePowinienBycTask($num)
    {
        $this->assertNumElements($num, '.added-task');
    }
}
