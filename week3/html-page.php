<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>My Navigation in PHP</title>
    </head>

    <body>
        <nav>
            <ul>
                <?php
                    $nav = array(
                        'index.php' => 'Home',
                        'about.php' => 'About',
                        'daily.php' => 'Daily',
                        'customers.php' => 'Customers',
                        'gallery.php' => 'Gallery'
                    );

                    // Loops through each item in the array, displaying its respective key and value
                    foreach($nav as $key => $value) {
                        echo '<li><a href="'.$key.'">'.$value.'</a></li>';
                        // echo 'This is my '.$value.' page and the name of the PHP page is '.$key.' <br>';
                    }
                ?>
            </ul>
        </nav>
    </body>
    
</html>