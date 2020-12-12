<?php

// Config file that links to credentials.php

ob_start(); // Prevents header errors before reading the whole page
define('DEBUG', 'FALSE'); // Displays errors

include('credentials.php');












// BOTTOM ONLY - RESERVED
function myerror($myFile, $myLine, $errorMsg) {
    if(defined('DEBUG') && DEBUG) {
        echo "Error in file: <b>".$myFile."</b> on line: <b>".$myLine."</b><br />";
        echo "Error Message: <b>".$errorMsg."</b><br />";
        die();
    } else {
        echo "I'm sorry, we have encountered an error.";
        die();
    }
}

?>