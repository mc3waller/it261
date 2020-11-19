<?php

$firstName = '';
$lastName = '';
$email = '';
// $phone = '';
$gender = '';
$wines = '';
$privacy = '';
$comments = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
// $phoneErr = '';
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

if (isset($_POST['firstName'],
            $_POST['lastName'],
            $_POST['gender'],
            $_POST['wines'],
            $_POST['comments'],
            $_POST['privacy'])) {

                $to = 'mc3waller@hotmail.com';
                $subject = 'Test Email' .date('m/d/y');
                $body = ''.$firstName.' has filled out your form '.PHP_EOL.'';
                $body .= 'Email: '.$email.' '.PHP_EOL.'';
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

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Emailable Form</title>
        <style>
            form {
                width: 350px;
                margin: 0 auto;
            }

            input {
                margin-bottom: 10px;
            }

            input[type=text],
            input[type=email],
            textarea {
                width: 100%;
                height: 30px;
            }

            textarea {
                height: 120px;
                margin-bottom: 20px;
            }

            fieldset {
                color: #666666;
                padding: 10px 15px 10px 10px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            .box {
                width: 600px;
                margin: 20px auto;
                background: beige;
                padding: 20px;
                border: 1px solid green;
            }

            select {
                margin-bottom: 10px;
            }

            ul {
                list-style-type: none;
                list-style-position: inside;
            }

            span {
                display: block;
                color: red;
                font-style: italic;
            }
        </style>
    </head>

    <body>

        <!-- 'action' echo = the form 'action' is found on this page -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <fieldset>
                <label>First Name</label>
                    <input type="text" name="firstName" value="<?php
                        if (isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>"> 
                        <!-- If the end user has typed a first name, use that name -->
                        <span><?php echo $firstNameErr; ?></span>

                <label>Last Name</label>
                    <input type="text" name="lastName" value="<?php
                        if (isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>"> 
                        <!-- If the end user has typed a last name, use that name -->
                        <span><?php echo $lastNameErr; ?></span>

                <label>Email</label>
                    <input type="text" name="email" value="<?php
                        if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"> 
                        <!-- If the end user has typed an email, use that email -->
                        <span><?php echo $emailErr; ?></span>

                <label>Gender</label>
                    <ul>
                        <li><input type="radio" name="gender" value="male"
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>
                                >Male</li>
                        <li><input type="radio" name="gender" value="Female"
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>
                                >Female</li>
                    </ul>
                        <span><?php echo $genderErr; ?></span>

                <label>Favorite Wines</label>
                    <ul>
                        <!-- Radio buttons and check boxes are very similar -->
                        <li><input type="checkbox" name="wines[]" value="Cabernet"
                            <?php if (isset($_POST['wines']) && $_POST['wines'] == 'Cabernet') echo 'checked="checked"'; ?>
                                >Cabernet</li>
                        <li><input type="checkbox" name="wines[]" value="Merlot"
                            <?php if (isset($_POST['wines']) && $_POST['wines'] == 'Merlot') echo 'checked="checked"'; ?>
                                >Merlot</li>
                        <li><input type="checkbox" name="wines[]" value="Syrah"
                            <?php if (isset($_POST['wines']) && $_POST['wines'] == 'Syrah') echo 'checked="checked"'; ?>
                                >Syrah</li>
                        <li><input type="checkbox" name="wines[]" value="Malbec"
                            <?php if (isset($_POST['wines']) && $_POST['wines'] == 'Malbec') echo 'checked="checked"'; ?>
                                >Malbec</li>
                        <li><input type="checkbox" name="wines[]" value="Zinfandel"
                            <?php if (isset($_POST['wines']) && $_POST['wines'] == 'Zinfandel') echo 'checked="checked"'; ?>
                                >Zinfandel</li>
                    </ul>
                        <span><?php echo $winesErr; ?></span>

                <label>Comments</label>
                    <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
                        <span><?php echo $commentsErr; ?></span>

                <input type="radio" name="privacy" value="yes"<?php
                    if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"' ; ?>>
                    I agree to your Privacy Policy
                    <span><?php echo $privacyErr; ?></span>

                <input type="submit" value="Send">
                <p><a href="">Reset</a></p>
            </fieldset>

        </form>



    </body>

</html>