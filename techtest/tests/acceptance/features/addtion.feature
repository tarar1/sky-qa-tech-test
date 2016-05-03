Feature: Addtion

@example
Scenario: Add two numbers 
    Given I enter "10" into the calculator
    And I hit "add"
    And I enter "20" into the calculator
    And I hit "equals"
    Then I see a result of "30"
@example
Scenario: Add three numbers 
    Given I enter "20" into the calculator
    And I hit "add"
    And I enter "20" into the calculator
    And I hit "add"
    And I enter "20" into the calculator
    And I hit "equals"
    Then I see a result of "60"
@example
Scenario: Addtion and subtraction of numbers 
    Given I enter "17" into the calculator
    And I hit "add"
    And I enter "7" into the calculator
    And I hit "subtract"
    And I enter "7" into the calculator
    And I hit "equals"
    Then I see a result of "17"    
