<?php

// constant for page identification
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// switch for displaying certain information for the active page 
switch(THIS_PAGE) {
    case 'index.php' : 
        $title = 'Home';
        $mainHeadline = 'Welcome to the Home Page!';
        $center = 'center';
        $body = 'home';
    break;

    case 'about.php' : 
        $title = 'About';
        $mainHeadline = 'Welcome to the About Page!';
        $center = 'center';
        $body = 'about inner';
    break;

    case 'daily.php' : 
        $title = 'Daily';
        $mainHeadline = 'Welcome to the Daily Page!';
        $center = 'center';
        $body = 'daily inner';
    break;

    case 'customers.php' : 
        $title = 'Customers';
        $mainHeadline = 'Welcome, Customers!';
        $center = 'center';
        $body = 'customers inner';
    break;

    case 'contact.php' : 
        $title = 'Contact';
        $mainHeadline = 'Contact Us';
        $center = 'center';
        $body = 'contact inner';
    break;

    case 'gallery.php' : 
        $title = 'Gallery';
        $mainHeadline = 'Welcome to the Gallery!';
        $center = 'center';
        $body = 'gallery inner';
    break;

} // end switch

// array for navigation links
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// displays the nav array as a list, attatching the "active" attribute to the current page
function makeLinks($nav) {
    $myReturn = '';

    foreach($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $myReturn .= '<li><a href="'.$key.'" class="active">'.$value.'</a></li>';
        } else {
            $myReturn .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        } // end else

    } // end foreach

    return $myReturn;

} // end function

// photos array for the randImages() function
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

// displays a random images from the specified (perameter) collection
function randImages($photos) {
    $i = rand(0, count($photos)-1);
    $selectedImages = 'images/'.$photos[$i].'.png';
    echo '<img src="'.$selectedImages.'" alt="'.$i.'" style="width:400px">';
} // end function

?>