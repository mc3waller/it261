<?php

/* ============================================================
ARRAYS

Detailed exercise on arrays, which will eventually lead to
creating a navigation menu.
============================================================ */


?>


<!-- navigaiton list -->
<!-- <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">about</a></li>
    <li><a href="daily.php">Daily</a></li>
    <li><a href="customers.php">Customers</a></li>
    <li><a href="gallery.php">Gallery</a></li>
</ul> -->

<?php


/* Array for navigation menu
Variable        Key         Value */
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['gallery.php'] = 'Gallery';


$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'customers.php' => 'Customers',
    'gallery.php' => 'Gallery'
);
?>

<ul>
    <?php
        // Loops through each item in the array, displaying its respective key and value
        foreach($nav as $key => $value) {
            echo '<li><a href="'.$key.'">'.$value.'</a></li>';
            // echo 'This is my '.$value.' page and the name of the PHP page is '.$key.' <br>';
        }
    ?>
</ul>