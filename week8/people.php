<?php

include('config.php');
// Connecting to the database

// "People" will change to personal table name
$sql = 'SELECT * FROM People';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

// Do we have more than 0 rows?

if(mysqli_num_rows($result) > 0) { // Show the records
    while($row = mysqli_fetch_assoc($result)) {
        // This array will display the contents of the row
        echo '<ul>'; // Use an anchor value similar to that used for the Switch assignment
        echo '<li class="bold">For more information<a href="people-view.php?id='.$row['PeopleID'].'">'.$row['FirstName'].'</a></li>';
        echo '</ul>';
    } // End of while loop
} else { // If there are no people
    echo 'Nobody home!';
} // End of else

// Release web server
@mysqli_free_result($result);

// Close the connection
@mysqli_close($iConn);