Feature: Division
@example
Scenario: Divid two numbers 
    Given I enter "1000" into the calculator
    And I hit "divide"
    And I enter "1000" into the calculator
    And I hit "equals"
    Then I see a result of "1"  

@example
Scenario: Zero Divided by number 
    Given I enter "0" into the calculator
    When I hit "divide"
    And I enter "10" into the calculator
    When I hit "equals"
    Then I see a result of "0"     