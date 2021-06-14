## Question 1
```
0
1
1
2
3
5
8
13
21
34
55
```

## Question 2
```
/**
 * Add two numbers together and return the result
 *
 * @param int $a
 * @param int $b
 * @return int
 */
function sum(int $a, int $b): int
{
	return $a + $b;
}

/**
 * Subtract $b from $a and return the result
 *
 * @param int $a
 * @param int $b
 * @return int
 */
function subtract(int $a, int $b): int
{
	return $b - $a;
}

use DivisionByZeroError;

/**
 * Divide $a by $b and return the result
 *
 * @param int $a
 * @param int $b
 * @return int
 */
public function divide(int $a, int $b): int
{
	try {
		return $a / $b;
	} catch (DivisionByZeroError $e) {
		return 0;
	}
}

/**
 * Return $int cubed
 *
 * @param int $int
 * @return int
 */
function cube(int $int) : int
{
	return pow($int,3); 
}
```

## Question 3
```
/**
 * Confirm that exactly one item matching a search term exists in an array.
 * If the search term is not found in the array it should return -1
 * If more than one item is found in the array, an array is thrown
 * @param array $searchItems
 * @param string $searchTerm
 * @return int
 * @throws Exception
 */
function findBozboz(array $searchItems, string $searchTerm)
{
	if (count($searchItems) === 0) {
		return -1;
	}
	$findCount = 0;
	$firstSearchLetter = $searchTerm[0];

	foreach ($searchItems as $searchItem) {
		if ($searchItem[0] = $firstSearchLetter) {
			if ($searchItem == $firstSearchLetter) {
				$findCount++;
				if ($findCount > 1) {
					throw new Exception('More than one exists');
				}
			}
		}
	}
	return $findCount ? $findCount : -1;
}
```

## Question 4
Refactored code is all the php files in this repo

Overview of changes:
- Put the classes in their own files following PSR naming convections
- Added docblocks
- Added type declarations
- Added return type declarations
- Appended 'PRICE_CODE_' to the pricecode consts in the Film class to make their use easier to discern
- Define consts before variables in classes
- Underscore at start of variable names does not follow PSR2 naming convention
- Moved variables to the start of their respective classes
- Replaced array() notation with []
- Renamed $thisAmount to $totalPrice in the Customer class to make it's use easier to discern
- Film class is now extended by three new classes: RegularFilm, NewReleaseFilm and ChildrensFilm. This implement an interface requiring  new function called 'getRentalPrice()' and 'getFrequentRenterPoints()'. This replaces the switch statement needed in Customer->getStatement() and is called via the Rental class.
- Created a Statement Class that Customer class is injected into for creating statements
- Contents of Customer->getStatement moved into Statement class in which the Customer is passed and split into three functions handling data collecting and data formatting. $totalAmount and $frequentRenterPoints are now returned in the formatted string of the statement