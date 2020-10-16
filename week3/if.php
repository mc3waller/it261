<?php

/* ============================================================
IF STATEMENT & LOGIC

Detailed exercise on IF statements.
============================================================ */

$salary = 150000;

// if ($salary >= 200000) {
//     echo 'Yippy and Skippy!!!!!!!';
// } else {
//     echo 'Not too happy!';
// }

if ($salary >= 200000) {
    echo 'Yippy and Skippy, and life is good!!!!!';
} elseif($salary >= 150000) {
    echo 'Not bad, still happy';
} else {
    echo 'I may need to work harder!';
}

echo '<br>';

// Date function that will be echoed
echo date('Y');

echo '<br>';

// Displays server time
echo date('h:i a');

echo '<h2>Reset the time zone</h2>';

// Sets the default time zone
date_default_timezone_set('America/Los_Angeles');

// Displaying the server time after resetting the default
echo "The real time is... " . date('h:i:sa');

/* If it's the morning, say "good morning"
If it's the afternoon, say "good afternoon"
If it's the evening, say "good evening" */

echo '<br>';
echo date('H:i a');
echo '<br>';
echo date('H:i:sa');
echo '<br>';

// Create a variable to store the current time
$correct_time = date('H:i: a');

// Control structure that displays a specific message depending on the value of the current time
if ($correct_time < 10) {
    echo 'Good morning!';
} elseif ($correct_time < 18) {
    echo 'Good afternoon!';
} else {
    echo 'Good evening!';
}


/*
IF the name input field is empty, do something
ELSE, then we are happy
IF the email input field is empty, the "do something" will be a message to the user to fill out the input field

In PHP there are variables, arrays, and global variables
Global variables begin with an udnerscore and are written in uppercase (e.g. $_POST)
$_POST['name'], $_POST['email'], $_POST['wines'], etc.

if (empty($_POST['name'])) {
    $name_err = 'Please fill out your name';
} else {
    $name = $_POST['name'];
}
*/