<?php

$name = '';
$email = '';
$amount = '';
$bank = '';
$currency = '';

$nameErr = '';
$emailErr = '';
$amountErr = '';
$bankErr = '';
$currencyErr = '';

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

if (empty($_POST['amount'])) {
    $amountErr = 'Please enter the amount';
} else {
    $amount = $_POST['amount'];
}

if ($_POST['bank'] == 'null') {
    $bankErr = 'Please select your bank';
} else {
    $bank = $_POST['bank'];
}

if (empty($_POST['currency'])) {
    $currencyErr = 'Please select a currency';
} else {
    $currency = $_POST['currency'];
}

} // close if $_SERVER request method

?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Currency Final</title>
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

        <form action="" method="post">
            <fieldset>
                <label>Name</label>
                    <input type="text" name="name" value="<?php
                        if (isset($_POST['name'])) echo $_POST['name']; ?>"> 
                        <!-- If the end user has typed a name, use that name -->
                        <span><?php echo $nameErr; ?></span>

                <label>Email</label>
                    <input type="text" name="email" value="<?php
                        if (isset($_POST['email'])) echo $_POST['email']; ?>"> 
                        <!-- If the end user has typed an email, use that email -->
                        <span><?php echo $emailErr; ?></span>

                <label>How much money do you have?</label>
                    <input type="text" name="amount" value="<?php
                        if (isset($_POST['amount'])) echo $_POST['amount']; ?>"> 
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

                <label>Choose your currency</label>
                    <ul>
                        <!-- LOGIC: still asking "if post currency was set", as well as "is post currency equal to the value?" -->
                        <li><input type="radio" name="currency" value="0.013"
                            <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked="checked"'; ?>
                                >Rubles</li>
                        <li><input type="radio" name="currency" value="0.76"
                            <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked="checked"'; ?>
                                >Canadian dollars</li>
                        <li><input type="radio" name="currency" value="1.28"
                            <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked="checked"'; ?>
                                >Pounds</li>
                        <li><input type="radio" name="currency" value="1.18"
                            <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked="checked"'; ?>
                                >Euros</li>
                        <li><input type="radio" name="currency" value="0.0094"
                            <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked="checked"'; ?>
                                >Yen</li>
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

                    echo '<p>'.$name.', you now have $'.$total_f.' American dollars!</p>';

                    echo '<p>We will be getting back to you via your email: '.$email.'</p>';

                } // end of isset

                ?>
            </div>

    </body>

</html>