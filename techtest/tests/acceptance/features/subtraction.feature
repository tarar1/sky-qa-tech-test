Feature: Subtract
@example
Scenario: Subtract two numbers 
    Given I enter "3000" into the calculator
    And I hit "subtract"
    And I enter "1000" into the calculator
    And I hit "equals"
    Then I see a result of "2000" 