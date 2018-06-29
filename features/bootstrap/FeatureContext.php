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
class FeatureContext implements Context
{
    /** @var TaskList */
    private $taskList;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given pustą listę tasków
     */
    public function pustaListeTaskow()
    {
        $this->taskList->clear();
    }

    /**
     * @When dodam nowego taska o treści :taskContent
     */
    public function dodamNowegoTaskaOTresci($taskContent)
    {
        $task = new Task('test-id', $taskContent);
        $this->taskList->add($task);
    }

    /**
     * @Then na liście powinien być :tasksSize task
     */
    public function naLisciePowinienBycTask($tasksSize)
    {
        if (count($this->taskList->findAll() !== $tasksSize)) {
            throw new \Exception('Wrong task number');
        }
    }
}
