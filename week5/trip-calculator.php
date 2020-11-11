<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
        <style>
            form {
                width: 425px;
                margin: 0 auto;
                background: beige;
            }

            fieldset {
                color: #666666;
                padding: 10px 15px 0px 10px;
            }

            input {
                margin-bottom: 10px;
            }

            input[type=text] {
                width: 35%;
            }

            input[type=submit] {
                display: block;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            select {
                margin-bottom: 10px;
            }

            ul {
                list-style-type: none;
                list-style-position: inside;
                padding-left: 0;
            }

            /* span {
                display: block;
                color: red;
                font-style: italic;
            } */

            .error {
                width: 400px;
                margin: 0 auto;
                border: 1px solid darkgray;
                color: red;
                text-align: center;
                padding: 10px;
                margin-top: 10px;
            }

            h2 {
                color: red;
                text-align: center;
            }

            .box {
                width: 400px;
                margin: 20px auto;
                padding: 10px;
                border: 1px solid darkgray;
            }
        </style>
    </head>

    <body>

        <h1 style="text-align:center">Trip Calculator</h1>

        <form action="" method="post">
            <fieldset>
                <label>Your Name</label>
                    <input type="text" name="name" value="<?php
                        if (isset($_POST['name'])) echo $_POST['name']; ?>"> 

                <label>How many miles will you be driving?</label>
                    <input type="text" name="distance" value="<?php
                        if (isset($_POST['distance'])) echo $_POST['distance']; ?>">

                <label>How many hours per day would you like to be driving?</label>
                    <input type="text" name="hours_day" value="<?php
                        if (isset($_POST['hours_day'])) echo $_POST['hours_day']; ?>">

                <label>Price per gallon</label>
                    <ul>
                        <li><input type="radio" name="gallon_price" value="3.00"
                            <?php if (isset($_POST['gallon_price']) && $_POST['gallon_price'] == '3.00') echo 'checked="checked"'; ?>
                                >$3.00</li>
                        <li><input type="radio" name="gallon_price" value="3.50"
                            <?php if (isset($_POST['gallon_price']) && $_POST['gallon_price'] == '3.50') echo 'checked="checked"'; ?>
                                >$3.50</li>
                        <li><input type="radio" name="gallon_price" value="4.00"
                            <?php if (isset($_POST['gallon_price']) && $_POST['gallon_price'] == '4.00') echo 'checked="checked"'; ?>
                                >$4.00</li>
                    </ul>

                <label>Your Fuel Efficiency</label>
                    <select name="efficiency">
                        <option value="null"
                            <?php if (isset($_POST['efficiency']) && $_POST == 'null') {
                                echo 'selected="unselected"';
                            } ?>
                                >Select one</option>

                        <option value="10"
                            <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == 10) {
                                echo 'selected="selected"';
                            } ?>
                                >Terrible at 10</option>

                        <option value="20"
                            <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == 20) {
                                echo 'selected="selected"';
                            } ?>
                                >Better at 20</option>

                        <option value="30"
                            <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == 30) {
                                echo 'selected="selected"';
                            } ?>
                                >Okay at 30</option>

                        <option value="40"
                            <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == 40) {
                                echo 'selected="selected"';
                            } ?>
                                >Great at 40</option>
                    </select>

                <input type="submit" value="Calculate">
                <p style="text-align:center"><a href="">Reset</a></p>
            </fieldset>
        </form>

        <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                // Need to declare errors; if a field is empty, do something - more or less, declaring a bunch of if statements and, afterwards, if all the if statements are true, then awesome.

                if (empty($_POST['name'])) {
                    echo '<p class="error">Please fill out your name</p>';
                }

                if (empty($_POST['distance'])) {
                    echo '<p class="error">Please fill out the distance</p>';
                }

                if (empty($_POST['hours_day'])) {
                    echo '<p class="error">Please fill out your preferred hours</p>';
                }

                if (empty($_POST['gallon_price'])) {
                    echo '<p class="error">Please fill out the price</p>';
                }

                if ($_POST['efficiency'] == 'null') {
                    echo '<p class="error">Please select your efficiency</p>';
                }

                elseif (isset($_POST['name'],
                        $_POST['distance'],
                        $_POST['hours_day'],
                        $_POST['gallon_price'],
                        $_POST['efficiency']) &&
                        is_numeric($_POST['distance']) &&
                        is_numeric($_POST['hours_day']) &&
                        is_numeric($_POST['gallon_price']) &&
                        is_numeric($_POST['efficiency'])
                        ) {

                            // Assign variables from set form fields
                            $name = $_POST['name'];
                            $distance = $_POST['distance'];
                            $hours_day = $_POST['hours_day'];
                            $gallon_price = $_POST['gallon_price'];
                            $efficiency = $_POST['efficiency'];

                            // Arithmatic; result formatted
                            $gallons = $distance / $efficiency;
                            $dollars = $gallons * $gallon_price;
                            $total_hours = $distance / 65;
                            $total_days = $total_hours / $hours_day;

                            $dollars_f = number_format($dollars, 2);
                            $total_hours_c = ceil($total_hours);
                            $total_days_c = ceil($total_days);

        ?>

            <div class="box">
                <?php
                    // Client output
                    echo '<h2>Calculator Results</h2><p>'.$name.', you will be driving <strong>'.$distance.'</strong> miles<br>Your vehicle has an efficiency rating of <strong>'.$efficiency.' miles per gallon</strong><br>Your total cost for gas will be <strong>$'.$dollars_f.' dollars</strong><br>You will be driving a total of <strong>'.$total_hours_c.' hours equating to '.$total_days_c.' days.</p>';

                } // end of isset
            }
                ?>
            </div>

    </body>
</html>