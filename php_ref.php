<?php
/*
PHP Reference Document
by Nick Kirkpatrick http://cvramen.com
*/
//variable declaration
$bar = 1;
//variable type
gettype($bar); //yields "integer" because it's an integer
//string declaration
$lpstring = "I tried so hard and got so far.";
$lpstring2 = "I wanna be in a another place.";
//assign by reference
$foo = 1;
$garply =& $foo;
$garply = 56; //both foo and garply are 56
//declare array
$waldo = array(8,6,7,5,3,0,9);
echo $waldo[0]; //echo "8"
//array within array
$thud = array(5,"blue","port", array("x", "y", "z"));
echo $thud[3][1]; //echo something inside the array in the array "thud". In this case, it is "y"
//key array
$customerslist = array("first_name" => "George", "last_name" => "Washington");
echo $customerslist["first_name"]; //echo "George". You can't call items in this array by number
//print the array
print_r($waldo);
//other array functions
sort($waldo); //sorts the array
rsort($waldo); //sorts the items in opposite order
count($waldo); //number of items
max($waldo); //maximum value
min($waldo); //minimum value
array_product($waldo); //product of values
array_sum($waldo); //sum of values
$string1 = implode("*", $waldo); //make a string from values in an array, puts "*" between values
$waldo = explode("*", $string1); //make an array from a string, "*" is the separator
in_array(3, $waldo); //returns boolean (1 or nothing) depdending on whether "3" is in the array
array_push($waldo, "swiss"); //push item onto end of array
array_pop($waldo); //pop item off end of array
//array_diff
$h_icecream = array("chocolate", "cookies", "superman", "vanilla", "red velvet");
$f_icecream = array("chocolate", "vanilla", "cookies");
print_r (array_diff($h_icecream, $f_icecream)); //displays difference between the two arrays. The first array contains 2 elements that are not in the second array
//array_combine
$mdcounty = array("Strafford","Cheshire","Rockingham");
$mdtown = array("Barrington","Winchester","Deerfield");
$townslist = array_combine($nhcounty, $nhtown); //creates an array with Strafford as the key and Barrington as the value, etc.
print_r($townslist);
//string functions
strtolower($lpstring); //makes string lowercase
strtoupper($lpstring); //uppercase
ucfirst($lpstring); //uppercase first-letter
ucwords($lpstring); //uppercase words
strlen($lpstring); //string length
trim($lpstring); //remove whitespace
strstr($lpstring, "tried"); //find "tried" and echo displays everything after "tried"
str_replace("got so far", "achieved so much", $lpstring); //replace "got so far" with "achieved so much"
str_repeat($lpstring, 2); //repeat
substr($lpstring, 5, 10); //make substring
strpos($lpstring, "hard"); //find position
strchr($lpstring, "e"); //find character
strcmp($lpstring, $lpstring2); //returns -1 if $lpstring is first alphabetically, returns 1 if $lpstring is second, returns 0 if they are the same
strcasecmp($lpstring, $lpstring2); //same, case-insensitive
//if statement
if (2 == 3) {
	echo "Whattayaknow?";
} elseif (2 == 1) {
	echo "Well I'll be!";
} else {
	echo "Just what I thought!";
}
//for loop
for ($count=0; $count <= 9; $count++) {
	echo $count . ", ";
}
//while loop
$count = 0;
while($count <=6) {
	echo $count . ", ";
	$count++;
	}
//do-while loop
$count = 0;
do {
	echo $count . ", ";
	$count++;
} while ($count <= 4); //note that the semicolon is needed
//foreach loop
$ages = array(4,8,15,16,23,42);
foreach($ages as $age) { //"$age" is a variable you need for this loop
	echo $age . ", ";
}
//foreach loop with array key
foreach($ages as $position => $age) {
	echo $position . ": " . $age . "<br />";
}
//foreach
$prices = array("Brand new computer" => 1064, "1 month web hosting with php-enabled server" => 5, "Learning PHP" => "priceless");
foreach($prices as $key => $value) {
	if (is_int($value)) { //tests $value so that it places a dollar sign before the 1064 and the 5. Does not place a dollar sign before "priceless"
		echo $key . ": $" . $value . "<br />";
	} else {
		echo $key . ": " . $value . "<br />";
	}
}
//switch
$a = 3;
switch ($a) {
	case 0:
		echo "a equals 0";
		break;
	case 1:
		echo "a equals 1";
		break;
	case 2:
		echo "a equals 2";
		break;
	default:
		echo "a is not 0, 1, or 2"; //this one will execute
}
//continue
for ($count=0; $count <= 11; $count++) {
	if ($count == 5) {
		continue; //skips the rest of the loop when $count is 5. echo will display every number but 5
	}
	echo $count . ", ";
}
//break
for ($count=0; $count <= 11; $count++) {
	if ($count == 5) {
		break; //shuts off the loop when $count is 5
	}
	echo $count . ", ";
}
//array pointers
$heights = array(63, 68, 69, 72, 74, 79);
while ($height = current($heights)) { //The single equal sign is not a typo. This boolean is evaluating whether or not it is possible to assign a value to $height. When you can't (i.e. you run out of values) the loop stops.
	echo "The subject is " . $height . " inches tall" . "<br />";
	next($heights);
}
//function
function car_stats($make, $model, $year) {
	echo "My car is the {$make} {$model}, produced in the year {$year}<br />";
}
car_stats("Honda", "Accord", 2007); //passes values to $make, $model, and $year
car_stats("Mercury", "Mariner", 2005);
//returning function
function addition($val1, $val2) {
	$sum = $val1 + $val2;
	return $sum;
}
$new_val = addition(3,4);
echo $new_val;
//global variable
global $myGlobalVar;
//default values
function chip($flavor = "bbq", $bagcolor = "orange") { //puting an assignment in the argument creates a default value, so that when the function is used, it will work even if you don't pass an argument into it.
	echo "The flavor of the potato chip is {$flavor} and the color of the bag is {$bagcolor}.<br />";
}
chip("salt and vinegar", "yellow"); //"The flavor of the potato chip is salt and vinegar and the color of the bag is yellow."
chip(); //"The flavor of the potato chip is bbq and the color of the bag is orange." You don't give any arguments to the function so it just goes with the default
//development/debugging
echo "<pre>";
print_r (get_defined_vars()); //outputs all of the defined variables to the page
echo "</pre>";

/* 
== EQUAL
=== EQUAL with type comparison
!= NOT EQUAL
!== NOT EQUAL with type comparison
<> NOT EQUAL
< LESS THAN
> GREATER THAN
<= LESS THAN OR EQUAL TO
>= GREATER THAN OR EQUAL TO

! LOGICAL NOT
&& LOGICAL AND
|| LOGICAL OR
xor LOGICAL XOR

(Assignment Operators- as opposed to arithmetic operators)
+= add
++ add
-= subtraction
*= multiplication
/= division
.= concatenation (as in strings)
%= modulus
&= and
|= or
*/
//rounding
$myFloat = 8.14;
echo round($myFloat, 0); //round a floating point variable, the second value is the precision of digits. If it was 1, it would round to 1 digit (i.e. 8.1 instead of 8), but this uses 0 as the precision, which means you get a whole number
echo ceil($myFloat); //ceiling (round up)
echo floor($myFloat); //floor (round down)
echo abs($myFloat); //absolute value
//exponent functions
echo pow($myFloat, 5); //exponents (5 is the exponent)
echo sqrt($myFloat); //square root
//randomization
echo rand(); //random (any)
echo rand(1, 10); //random (min, max)
echo rand() / getrandmax(); //getrandmax is the maximum number that rand() can be, usually 2147483647. This line of code yields a random number between 0 and 1
?>