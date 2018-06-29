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
}
