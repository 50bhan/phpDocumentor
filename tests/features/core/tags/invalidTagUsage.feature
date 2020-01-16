Feature: Invalid tags in souce file
  In order to find issues in docblocks
  As a user
  I want to be able to see the invalid tags in a report

  Scenario: Add error to file when invalid tag is found
    Given A single file named "test.php" based on "invalidTag.php"
    When I run "phpdoc -f test.php"
    Then file "test.php" must contain an error

