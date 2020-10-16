<?php

/* ============================================================
PHP VARIABLES

Variables are containers for content
Keep variable naming conventions consistent
PHP variables of similar names prioritize the last assignment
=============================================================== */


// $first_name = 'Malik';
// // "=" operator is for assignment, not equality
// // Statements end with a semicolon

$last_name = 'Waller';

// $car = 'Toyota';
// echo $car;

$car = ['Toyota', 'Ford','Chevrolet', 'Nissan'];
$car = array('Toyota', 'Ford','Chevrolet', 'Nissan');
print_r($car);


// echo $first_name. ' ' .$last_name;
// // echo is PHP for "print"
// // "." operator is for concatenation (REMINDER: php ignores whitespace)

// echo '<h2>'.$first_name.'</h2>';
// // Enclose variables with '.[value].' when written between quotes
echo $last_name;

echo '<br>';

// echo "<h1>$first_name</h1>";
// // Using double quotes omits the above rule


/* ============================================================
INDEX ARRAY

The following are examples of an INDEX ARRAY
============================================================ */


$first_name[] = 'Malik';
$first_name[] = 'Sara';
$first_name[] = 'Elizabeth';
$first_name[] = 'Kamala';
$first_name[] = 'Gretchen';
// Arrays can be constructed by adding values separately to a shared variable preceeding "[]"

$first_name = ['Malik', 'Sara', 'Elizabeth', 'Kamala', 'Gretchen'];
// ...or by adding values to a comma-separated list within "[]"

$first_name = array('Malik', 'Sara', 'Elizabeth', 'Kamala', 'Gretchen');
// ...or by omitting the "[]", placing the values in a comma-separated list within "()", following the word "array"

print_r($first_name);
// Arrays cannot be echoed, so we use print
// print accepts only one argument at a time
// print_r() outputs detailed information about the parameter in a format with its type, which can be easily understood by humans

echo '<br>';

echo $first_name[1];
// Index referencing


/* ============================================================
ASSOCIATIVE ARRAY

The folloowing is an example of an ASSOCIATIVE ARRAY
============================================================ */


$show = array('Name' => 'The Crown',
'Actor' => 'Clair Foy',
'Genre' => 'Historical Fiction');
// Essentially an array object, contianing key-value pairs

echo '<br>';

$show_name = 'The Crown';
$show_actor = 'Clair Foy';
$show_genre = 'Historical Fiction';
// A more impractical method of the performing the above

echo '<p>I have never seen '.$show_name.', which is a '.$show_genre.' starring '.$show_actor.'.<p>';
// ...or...
// echo "<p>I have never seen $show_name, which is a $show_genre starring $show_actor.<p>";

$begAlpha = 'abc';
$begAlpha2 = 'def';

echo $begAlpha . $begAlpha2;
// Concatenation between two string variables

echo '<br>';

$begAlpha = 'abc';
$begAlpha = 'def';

echo $begAlpha;
echo '<br>';

// ***********************
$begAlpha = 'abc';
$begAlpha .= 'def';

echo $begAlpha;
// ***********************
// The first of the above lines assigns a variable, then the second line contatenates more content onto its current value

echo '<br>';

/* ============================================================
WORKING WITH NUMBERS

...
============================================================ */


$x = 5;
echo $x;
// Variable output using a number

echo '<br>';

$x *= 5;
echo $x;
// This outputs the current value of "x" multiplied by 5

echo '<br>';

$y = 100;
$y *= .095;
echo $y;
// Another example of updating a variable value using the currently stored value
// Simply echoing a decimal value will remove zeroes

echo '<br>';

$y_num = number_format($y, 2);
echo 'My tax rate is '.$y_num.'';
// By using the number_format() version, you can place the decimal point where you'd like
// Arguments within "()": the number or a variable containing the number; number of decimal places TO THE LEFT

echo '<br>';

$a = 20;
$a += 30;
// $a -= 30;
echo $a;
// Another exmaple, but with addition/subtraction

/* EXTRA NOTE:
An echo statement (with the php tag included) can be shortened to: <?= [statement without "echo" or ";"] ?>