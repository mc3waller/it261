<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Currency Form</title>
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
        </style>
    </head>

    <body>

        <form action="" method="post">
            <fieldset>
                <label>Name</label>
                    <input type="text" name="name">
                <label>Email</label>
                    <input type="text" name="email">
                <label>How much money do you have?</label>
                    <input type="text" name="amount">
                <label>Choose your currency</label>
                    <ul>
                        <li><input type="radio" name="currency" 
                        value="0.013">Rubles</li>
                        <li><input type="radio" name="currency" 
                        value="0.76">Canadian dollars</li>
                        <li><input type="radio" name="currency" 
                        value="1.28">Pounds</li>
                        <li><input type="radio" name="currency" 
                        value="1.18">Euros</li>
                        <li><input type="radio" name="currency" 
                        value="0.0094">Yen</li>
                    </ul>
                    <input type="submit" value="Convert">
                        <p><a href="">Reset</a></p>
            </fieldset>

        </form>

        <?php
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                // Need to declare errors; if a field is empty, do something - more or less, declaring a bunch of if statements and, afterwards, if all the if statements are true, then awesome.

                if (empty($_POST['name'])) {
                    echo '<p>Please fill out your name!</p>';
                }

                if (empty($_POST['email'])) {
                    echo '<p>Please fill out your email!</p>';
                }

                if (empty($_POST['amount'])) {
                    echo '<p>Please show me the money!</p>';
                }

                if (empty($_POST['currency'])) {
                    echo '<p>Please check a currency!</p>';
                }

                elseif (isset($_POST['name'],
                        $_POST['email'],
                        $_POST['amount'],
                        $_POST['currency']) &&
                        is_numeric($_POST['amount']) &&
                        is_numeric($_POST['currency'])
                        ) {

                            // Assign variables from set form fields
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $amount = $_POST['amount'];
                            $currency = $_POST['currency'];

                            // Arithmatic; result formatted
                            $total = $amount * $currency;
                            $total_f = number_format($total, 2);
        ?>

            <div class="box">
                <?php
                    // Client output
                    echo '<h2>Thank you, '.$name.' for filling out our form</h2>';

                    echo '<p>'.$name.', you now have $'.$total_f.' American dollars!</p>';

                    echo '<p>We will be getting back to you via your email: '.$email.'</p>';

                } // end of isset
            } // close server (outter IF statement)
                ?>
            </div>

    </body>

</html>