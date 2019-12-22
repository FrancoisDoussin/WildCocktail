# This file contains a user story for demonstration only.
# Learn how to get started with Behat and BDD on Behat's website:
# http://behat.org/en/latest/quick_start.html

Feature:
  Test access to category

  Scenario: Go to category detail
    When I am on homepage
    Then I wait 2 seconds
    And I should see "Rhum"
    When I follow "Rhum"
    Then I wait 2 seconds
    And I should see "Catégorie Rhum"
    And I wait 2 seconds
    And I should see "Rhum Cockail 0"

  Scenario: Create Cocktail
    When I am on "/cocktail/new"
    Then I wait 1 seconds
    And I should see "Create Cocktail"
    And I fill in "Name" with "Super Cocktail Plus"
    And I scrollTo "100" px
    And I wait 1 seconds
    And I select "Rhum" from "Category"
    And I scrollTo "300" px
    And I wait 1 seconds
    And I fill in "Image" with "https://static.cuisineaz.com/610x610/i113467-cocktail-de-noel-a-la-grenade-et-au-citron-vert.jpg"
    And I scrollTo "500" px
    And I wait 1 seconds
    And I fill in wysiwyg on field "Description" with "Description Content"
    And I scrollTo "800" px
    And I wait 1 seconds
    And I fill in wysiwyg on field "Ingredients" with "Ingredients Content"
    And I scrollTo "1100" px
    And I wait 1 seconds
    And I fill in wysiwyg on field "Receipe" with "Receipe Content"
    And I scrollTo "1400" px
    And I wait 1 seconds
    And I press "Add"
    And I wait 2 seconds
    Then I should see "Super Cocktail Plus"
    And I wait 2 seconds
    And I should see "Description Content"
