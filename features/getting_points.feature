Feature: Getting points from a flight

  Scenario: Getting points from a flight that I booked
    Given I bought a ticket with 1000 miles in a normal class
    When I land in the destination
    Then I got 1000 points in my wallet

    Given Business class gets the double of the points
    And I bought a ticket with 1000 miles in a business class
    When I land in the destination
    Then I got 2000 points in my wallet
