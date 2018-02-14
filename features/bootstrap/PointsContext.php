<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class PointsContext implements Context
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
     * @Given I bought a ticket with :arg1 miles in a normal class
     */
    public function iBoughtATicketWithMilesInANormalClass($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I land in the destination
     */
    public function iLandInTheDestination()
    {
        throw new PendingException();
    }

    /**
     * @Then I got :arg1 points in my wallet
     */
    public function iGotPointsInMyWallet($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given Business class gets the double of the points
     */
    public function businessClassGetsTheDoubleOfThePoints()
    {
        throw new PendingException();
    }

    /**
     * @Given I bought a ticket with :arg1 miles in a business class
     */
    public function iBoughtATicketWithMilesInABusinessClass($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I'm :arg1 years old
     */
    public function imYearsOld($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I've booked a flight for the first time
     */
    public function iveBookedAFlightForTheFirstTime()
    {
        throw new PendingException();
    }

    /**
     * @Given I register my account
     */
    public function iRegisterMyAccount()
    {
        throw new PendingException();
    }

    /**
     * @When My flight lands
     */
    public function myFlightLands()
    {
        throw new PendingException();
    }

    /**
     * @Then My loyalty account should be credited with :arg1 points
     */
    public function myLoyaltyAccountShouldBeCreditedWithPoints($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I've booked a flight
     */
    public function iveBookedAFlight()
    {
        throw new PendingException();
    }

    /**
     * @Given My account registered and associated with my father's account
     */
    public function myAccountRegisteredAndAssociatedWithMyFathersAccount()
    {
        throw new PendingException();
    }

    /**
     * @Then My father's account gets credited with the corresponding loyalty points.
     */
    public function myFathersAccountGetsCreditedWithTheCorrespondingLoyaltyPoints()
    {
        throw new PendingException();
    }
}
