<?php

ob_start(); // Prevents header errors before reading the whole page
define('DEBUG', 'TRUE'); // Displays errors

include('credentials.php');

/* ========================================
NAVIGATION PHP
=========================================== */

// constant for page identification
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// switch for displaying certain information for the active page 
switch(THIS_PAGE) {
    case 'login.php' : 
        $title = 'Login | Indie Storm';
        // $mainHeadline = 'Indie Storm News';
        $center = 'center';
        $body = 'login inner';
    break;

    case 'register.php' : 
        $title = 'Register | Indie Storm';
        // $mainHeadline = 'Indie Storm News';
        $center = 'center';
        $body = 'register inner';
    break;

    case 'index.php' : 
        $title = 'Home | Indie Storm';
        $mainHeadline = 'Indie Storm News';
        $center = 'center';
        $body = 'home';
    break;

    case 'about.php' : 
        $title = 'About | Indie Storm';
        $mainHeadline = 'About This Site';
        $center = 'center';
        $body = 'about inner';
    break;

    case 'reviews.php' : 
        $title = 'Reviews | Indie Storm';
        $mainHeadline = 'Daily Review';
        $center = 'center';
        $body = 'reviews inner';
    break;

    case 'games.php' : 
        $title = 'Games | Indie Storm';
        $mainHeadline = 'Games Catalog';
        $center = 'center';
        $body = 'games inner';
    break;

    case 'games-view.php' : 
        $title = 'Game Details | Indie Storm';
        // $mainHeadline = '';
        $center = 'center';
        $body = 'games-view inner';
    break;

    case 'contact.php' : 
        $title = 'Contact | Indie Storm';
        $mainHeadline = 'Contact Us';
        $body = 'contact inner';
    break;

    case 'form-submitted.php' : 
        $title = 'Thank you! | Indie Storm';
        $mainHeadline = 'Thank you for your submission!';
        $body = 'contact inner';
    break;

    case 'gallery.php' : 
        $title = 'Gallery | Indie Storm';
        $mainHeadline = 'Screenshot Gallery';
        $body = 'gallery inner';
    break;

} // end switch

// array for navigation links
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['reviews.php'] = 'Reviews';
$nav['games.php'] = 'Games';
$nav['gallery.php'] = 'Gallery';
$nav['contact.php'] = 'Contact';

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


/* ========================================
RANDOM IMAGE PHP
=========================================== */

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
    echo '<img src="'.$selectedImages.'" alt="'.$i.'" style="width:300px">';
} // end function


/* ========================================
SCREENSHOT LIST PHP
=========================================== */

$screenshot['Baston'] = 'basti_Supergiant Games';
$screenshot['Child of Light'] = 'child_Ubisoft Montreal';
$screenshot['Dead Cells'] = 'deadc_Motion Twin, Evil Empire';
$screenshot['Gris'] = 'grisg_Nomada Studio';
$screenshot['Hollow Knight'] = 'hollo_Team Cherry';
$screenshot['Indivisible'] = 'indiv_Lab Zero Games';
$screenshot['Journey'] = 'journ_Thatgamecompany, Santa Monica Studio';
$screenshot['Little Nightmares'] = 'littl_Tarsier Studios';
$screenshot['Ori and the Blind Forest'] = 'oribl_Moon Studios';
$screenshot['The Pathless'] = 'pathl_Giant Squid';
$screenshot['Sky: Children of the Light'] = 'skych_Thatgamecompany';
$screenshot['Spiritfarer'] = 'spiri_Thunder Lotus Games';
$screenshot['The Messenger'] = 'theme_Sabotage Studio';
$screenshot['Ultimate Chicken Horse'] = 'ultim_Clever Endeavour Games';
$screenshot['Velocity 2X'] = 'veloc_Future Lab';

/* ========================================
RANDOM IMAGE (SCREENSHOTS)
=========================================== */

// photos array for the randImages() function
$featured[0] = 'basti';
$featured[1] = 'child';
$featured[2] = 'deadc';
$featured[3] = 'grisg';
$featured[4] = 'hollo';
$featured[5] = 'indiv';
$featured[6] = 'journ';
$featured[7] = 'littl';
$featured[8] = 'oribl';
$featured[9] = 'pathl';
$featured[10] = 'skych';
$featured[11] = 'spiri';
$featured[12] = 'theme';
$featured[13] = 'ultim';
$featured[14] = 'veloc';

// displays a random images from the specified (perameter) collection
function randImages2($featured) {
    $i = rand(0, count($featured)-1);
    $selectedImages = 'images/'.$featured[$i].'.jpg';
    echo '<a href="'.$selectedImages.'" target="_blank"><img src="'.$selectedImages.'" alt="'.$i.'" style="width:300px; border: 1px solid black; box-shadow: 0 10px 10px -10px rgb(0, 0, 0)"></a>';
} // end function


/* ========================================
FORM PHP
=========================================== */

$firstName = '';
$lastName = '';
$email = '';
$phone = '';
$newsletter = '';
$platforms = '';
$source = '';
$privacy = '';
$comments = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$phoneErr = '';
$newsletterErr = '';
$platformsErr = '';
$sourceErr = '';
$privacyErr = '';
$commentsErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Need to declare errors; if a field is empty, do something - more or less, declaring a bunch of if statements and, afterwards, if all the if statements are true, then awesome.

// If name is empty, we will have created a variable called $nameErr; it will say "please fill out your name" and will be assigned to $nameErr. If it is NOT empty, then $name = $_POST['name'] .

if (empty($_POST['firstName'])) {
    $firstNameErr = 'Please enter your first name';
} else {
    $firstName = $_POST['firstName'];
}

if (empty($_POST['lastName'])) {
    $lastNameErr = 'Please enter your last name';
} else {
    $lastName = $_POST['lastName'];
}

if (empty($_POST['email'])) {
    $emailErr = 'Please enter your email';
} else {
    $email = $_POST['email'];
}

if (empty($_POST['newsletter'])) {
    $newsletterErr = 'Please choose an option';
} else {
    $newsletter = $_POST['newsletter'];
}

if (empty($_POST['platforms'])) {
    $platformsErr = 'Please select at least one';
} else {
    $platforms = $_POST['platforms'];
}

if(empty($_POST['source'])) {
    $sourceErr = 'Please select one';
} else {
    $source = $_POST['source'];
}

if (empty($_POST['comments'])) {
    $commentsErr = 'Please provide your feedback';
} else {
    $comments = $_POST['comments'];
}

if (empty($_POST['privacy'])) {
    $privacyErr = 'Please agree to our Privacy Policy';
} else {
    $privacy = $_POST['privacy'];
}

// if the end user checks the checkboxes, we want to know
// implode the array of platforms - create a function for it

function myPlatforms() {
    $myReturn = '';

    if (!empty($_POST['platforms'])) {
        $myReturn = implode(', ', $_POST['platforms']);


    } return $myReturn; // end if

} // end function

if (empty($_POST['phone'])) {  // if empty, type in your number
    $phoneErr = 'Please enter your phone number';
} elseif(array_key_exists('phone', $_POST)) {
    if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { // if you are not typing the requested format of xxx-xxx-xxxx, display "invalid format"
        $phoneErr = 'Invalid format';
    } else {
        $phone = $_POST['phone'];
    }
}    

if (isset($_POST['firstName'],
            $_POST['lastName'],
            $_POST['newsletter'],
            $_POST['platforms'],
            $_POST['comments'],
            $_POST['phone'],
            $_POST['privacy'])) {

                $to = 'mc3waller@hotmail.com';
                $subject = 'Test Email' .date('m/d/y');
                $body = ''.$firstName.' has filled out the contact form! '.PHP_EOL.'';
                $body .= 'Email: '.$email.' '.PHP_EOL.'';
                $body .= 'Phone number: '.$phone.' '.PHP_EOL.'';
                $body .= 'Favorite platforms: '.myPlatforms().' '.PHP_EOL.'';
                $body .= 'Newsletter: '.$newsletter.' '.PHP_EOL.'';
                $body .= 'Comments: '.$comments.'';

                $headers = array(
                    'From' => 'no-reply@malwal2.dreamhosters.com',
                    'Reply-to' => ' '.$email.''
                );

                mail($to, $subject, $body, $headers);
                header('Location: form-submitted.php');

            } // end of isset

} // close if $_SERVER request method








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