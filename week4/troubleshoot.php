<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>My Adder Assignment</title>
        <style>
            p {
                color: red;
                text-align: center;
            }

            h1 {
                color: green;
                text-align: center;
            }

            h2 {
                font-size: 1.5em;
                text-align: center;
            }
            
            form {
                width: 350px;
                margin: 0 auto;
                border: 1px solid red;
                padding: 10px;
            }
        </style>
    </head>

    <body>
        <h1>Adder.php</h1>
        <form action="" method="post">
            <label>Enter the first number:</label>
            <input type="text" name="num1">
            <br>
            <label>Enter the second number:</label>
            <input type="text" name="num2">
            <br>
            <input type="submit" value="Add Em!!">
        </form>
    </body>
</html>

<?php

if (isset($_POST['num1'], $_POST['num2'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;

echo '<h2>You added '.$num1.'and '.$num2.'</h2>';
echo '<p> and the answer is <br>'.$myTotal.'!</p>';
echo '<p><a href="">Reset page</a></p>';
}

?>

<!--
Fixed opening form tag
Added post method to form
Added closing quoe in "add Em" value
Added doctype declaration
Added language to html tag
Added appropriate CSS
Removed stray PHP closing tag and punctuation after closing HTML
Moved opening form tag down to new line
Added opening label tag for the first form field
Moved input and break elements down to new lines
Fixed input tags for the second form field
Removed unneeded comment tag from PHP
Added 'num2' post argument to isset()
Removed '-' operator from $myTotal variable 
Changed $Num2 to lowercase within the $myTotal variable
Changed quotation style around $num1 in echo
Added single opening quote before $num2 in echo
Removed double quote after $num2 in echo
Removed CSS within echo and declaired it in the <style> tag
Moved the $myTotal call up into the same line as the preceeding echo
Fixed quotation around echo for $myTotal and the variable itself
Changed double quote after $myTotal to single quote and move it to the end
Added closing paragraph tag to 'reset' link
Changed 'Num1' to lowercase within the first form field
Closed any unecessary spacing
-->