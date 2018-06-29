<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
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
        throw new PendingException();
    }

    /**
     * @When dodam nowego taska o treści :arg1
     */
    public function dodamNowegoTaskaOTresci($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then na liście powinien być :arg1 task
     */
    public function naLisciePowinienBycTask($arg1)
    {
        throw new PendingException();
    }
}
