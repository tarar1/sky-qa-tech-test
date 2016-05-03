Feature: scientific

@example
Scenario: calulate the factorial for given number 
    Given I enter "4" into the calculator
    And I hit "factorial"
    Then I see a result of "24" 

@example
Scenario: convert a number  to hexadecimal 
    Given I enter "50" into the calculator
    And I hit "hexadecimal"
    When I hit "equals"
    Then I see a result of "32" 