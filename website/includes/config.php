<?php

/* ========================================
NAVIGATION PHP
=========================================== */

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
        $body = 'contact inner';
    break;

    case 'thx.php' : 
        $title = 'Thank you!';
        $mainHeadline = 'Thank you for filling out the form!';
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
FORM PHP
=========================================== */

$firstName = '';
$lastName = '';
$email = '';
$phone = '';
$gender = '';
$wines = '';
$privacy = '';
$comments = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$phoneErr = '';
$genderErr = '';
$winesErr = '';
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

// if (empty($_POST['phone'])) {
//     $phoneErr = 'Please enter a phone number';
// } else {
//     $phone = $_POST['phone'];
// }

if (empty($_POST['gender'])) {
    $genderErr = 'Please check one';
} else {
    $gender = $_POST['gender'];
}

// If gender = male, then male is 'checked'
if ($gender == 'male') {
    $male = 'checked';
} elseif ($gender == 'female') {
    $female = 'checked';
}

if (empty($_POST['wines'])) {
    $winesErr = 'What, no wines?';
} else {
    $wines = $_POST['wines'];
}

if (empty($_POST['comments'])) {
    $commentsErr = 'Please include your comments';
} else {
    $comments = $_POST['comments'];
}

if (empty($_POST['privacy'])) {
    $privacyErr = 'Please agree to our Privacy Policy';
} else {
    $privacy = $_POST['privacy'];
}

// if the end user checks the checkboxes, we want to know
// implode the array of wines - create a function for it

function myWines() {
    $myReturn = '';

    if (!empty($_POST['wines'])) {
        $myReturn = implode(', ', $_POST['wines']);


    } return $myReturn; // end if

} // end function

if (empty($_POST['phone'])) {  // if empty, type in your number
    $phoneErr = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)) {
    if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phoneErr = 'Invalid format!';
    } else {
        $phone = $_POST['phone'];
    }
}    

if (isset($_POST['firstName'],
            $_POST['lastName'],
            $_POST['gender'],
            $_POST['wines'],
            $_POST['comments'],
            $_POST['phone'],
            $_POST['privacy'])) {

                $to = 'mc3waller@hotmail.com';
                $subject = 'Test Email' .date('m/d/y');
                $body = ''.$firstName.' has filled out your form '.PHP_EOL.'';
                $body .= 'Email: '.$email.' '.PHP_EOL.'';
                $body .= 'Your phone number: '.$phone.' '.PHP_EOL.'';
                $body .= 'Your Wines: '.myWines().' '.PHP_EOL.'';
                $body .= 'Gender: '.$gender.' '.PHP_EOL.'';
                $body .= 'Comments: '.$comments.'';

                $headers = array(
                    'From' => 'no-reply@mystudentswa.com',
                    'Reply-to' => ' '.$email.''
                );

                mail($to, $subject, $body, $headers);
                header('Location: thx.php');

            } // end of isset

} // close if $_SERVER request method

?>