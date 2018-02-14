Feature: Registration on flying company scheme points

  Scenario: Registering a user
    Given I'm 30 years old
    And I've booked a flight for the first time
    And I register my account
    When My flight lands
    Then My loyalty account should be credited with 500 points

    Given I'm 16 years old
    And I've booked a flight
    And My account registered and associated with my father's account
    When My flight lands
    Then My father's account gets credited with the corresponding loyalty points.

