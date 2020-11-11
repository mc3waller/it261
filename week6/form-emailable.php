<?php

$name = '';
$email = '';
// $phone = '';
$gender = '';
$wines = '';
$privacy = '';

$nameErr = '';
$emailErr = '';
// $phoneErr = '';
$genderErr = '';
$winesErr = '';
$privacyErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Need to declare errors; if a field is empty, do something - more or less, declaring a bunch of if statements and, afterwards, if all the if statements are true, then awesome.

// If name is empty, we will have created a variable called $nameErr; it will say "please fill out your name" and will be assigned to $nameErr. If it is NOT empty, then $name = $_POST['name'] .

if (empty($_POST['name'])) {
    $nameErr = 'Please enter your name';
} else {
    $name = $_POST['name'];
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

if (empty($_POST['wines'])) {
    $winesErr = 'Please check one';
} else {
    $wines = $_POST['wines'];
}

if (empty($_POST['privacy'])) {
    $privacyErr = 'Please agree to our Privacy Policy';
} else {
    $privacy = $_POST['privacy'];
}

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

            input[type=text] {
                width: 100%;
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
                <label>Name</label>
                    <input type="text" name="name" value="<?php
                        if (isset($_POST['name'])) echo htmlspecialchars($_SERVER['name']); ?>"> 
                        <!-- If the end user has typed a name, use that name -->
                        <span><?php echo $nameErr; ?></span>

                <label>Email</label>
                    <input type="text" name="email" value="<?php
                        if (isset($_POST['email'])) echo htmlspecialchars($_SERVER['email']); ?>"> 
                        <!-- If the end user has typed an email, use that email -->
                        <span><?php echo $emailErr; ?></span>

                <label>How much money do you have?</label>
                    <input type="text" name="amount" value="<?php
                        if (isset($_POST['amount'])) echo htmlspecialchars($_SERVER['amount']); ?>"> 
                        <!-- If the end user has typed an amount, use that amount -->
                        <span><?php echo $amountErr; ?></span>
                        
                <label>Select your Banking Institution</label>
                    <select name="bank">
                        <option value="null"
                            <?php if (isset($_POST['bank']) && $_POST == 'null') {
                                echo 'selected="unselected"';
                            } ?>
                                >Select one</option>
                                
                        <option value="Bank of America"
                            <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Bank of America') {
                                echo 'selected="selected"';
                            } ?>
                                >Bank of America</option>

                        <option value="Chase Bank"
                            <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank') {
                                echo 'selected="selected"';
                            } ?>
                                >Chase Bank</option>

                        <option value="BECU"
                            <?php if (isset($_POST['bank']) && $_POST['bank'] == 'BECU') {
                                echo 'selected="selected"';
                            } ?>
                                >BECU</option>

                        <option value="Wells Fargo"
                            <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo') {
                                echo 'selected="selected"';
                            } ?>
                                >Wells Fargo</option>

                        <option value="Mattress"
                            <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Mattress') {
                                echo 'selected="selected"';
                            } ?>
                                >Mattress</option>
                    </select>
                        <span><?php echo $bankErr; ?></span>

                <label>Gender</label>
                    <ul>
                        <!-- LOGIC: still asking "if post currency was set", as well as "is post currency equal to the value?" -->
                        <li><input type="radio" name="gender" value="male"
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>
                                >Male</li>
                        <li><input type="radio" name="gender" value="Female"
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>
                                >Female</li>
                        <li><input type="radio" name="gender" value="Other"
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>
                                >Other</li>
                    </ul>
                    <span><?php echo $currencyErr; ?></span>

                    <input type="submit" value="Convert">
                    <p><a href="">Reset</a></p>
            </fieldset>

        </form>

        <?php

        if (isset($_POST['amount'],
                $_POST['currency']) &&
                is_numeric($_POST['amount']) &&
                is_numeric($_POST['currency'])
                ) {

                    // Assign variables from set form fields
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $amount = $_POST['amount'];
                    $bank = $_POST['bank'];
                    $currency = $_POST['currency'];

                    // Arithmatic; result formatted
                    $total = $amount * $currency;
                    $total_f = number_format($total, 2);

        ?>

            <div class="box">
                <?php
                    // Client output
                    echo '<h2>Thank you, '.$name.' for filling out our form. Your money will be wired to '.$bank.' within 24 hours.</h2>';

                    echo '<p>'.$name.', you are now have $'.$total_f.' American dollars!</p>';

                    echo '<p>We will be getting back to you via your email: '.$email.'</p>';

                } // end of isset

                ?>
            </div>

    </body>

</html>