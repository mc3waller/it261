<?php

include('includes/config.php');
include('includes/header.php');

?>

<div id="wrapper">
    <main>
        <h1><?php echo $mainHeadline; ?></h1>
        <a href="images/db_screenshot.JPG" target="_blank"><img src="images/db_screenshot.JPG" alt="Database table" style="border: 1px solid black; box-shadow: 0 10px 10px -10px rgb(129, 129, 129)"></a>
    </main>

    <aside>
        <h3>Database Table</h3>
        <p>Screenshot of the SQL database table for the <a href="games.php">Games</a> page.
    </aside>
    

<?php

include('includes/footer.php');

?>