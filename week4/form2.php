<!-- ============================================================
FORMS

Form elements: form, label, and input tag

Previously used GET, now using POST...
if(iiset($_POST['name']))

This version of the form DOES include error catching
for unpopulated fields.
============================================================ -->

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Second Form</title>
        <style>
            form {
                width: 350px;
                border: 2px solid green;
                margin: 20px auto;
                padding: 10px;
            }

            input[type=submit] {
                display: block;
            }

            textarea, input {
                margin-bottom: 10px;
            }

            h2 {
                color: red;
                text-align: center;
            }

            .center {
                text-align: center;
            }

            li {
                list-style-type: none;
                padding: 2px;
            }
        </style>
    </head>

    <body>

        <!-- HTML FORM -->
        <form action="" method="post">
            <label>Name</label>
            <input type="text" name="name">
                <br>
            <label>Email</label>
            <input type="email" name="email">
                <br>
            <label>Comments</label> <br>
            <textarea name="comments"></textarea>
                <br>
            <input type="submit" value="Send it!">
            <p><a href="">Reset</a></p>
        </form>

        <?php
            // Checks for existing values within the form variables; otherwise, populates them with form submissions via $_POST
            if (isset($_POST['name'], $_POST['email'], $_POST['comments'])) { // Check
                // Variables
                $name = $_POST['name'];
                $email = $_POST['email'];
                $comments = $_POST['comments'];

                // Checks if any of the forms are completely empty upon submission; returs an error if true
                if (empty($name && $email && $comments)) {
                    echo '<h2 class="center">Danger, Will Robinson! There was an error.</h2>';
                    echo'<p class="center">Please fill <br> out all fields!</p>';
                } else {
                    // Otherwise, return form submissions
                    echo '<ul class="center">';
                    echo '<li>'.$name.'</li>';
                    echo '<li>'.$email.'</li>';
                    echo '<li>'.$comments.'</li>';
                    echo '</ul>';
                }

            } // if isset
        ?>

    </body>
</html>