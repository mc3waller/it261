<?php

/* ============================================================
FORMS

Form elements: form, label, and input tag

Previously used GET, now using POST...
if(iiset($_POST['name']))

This version of the form does NOT include error catching
for unpopulated fields.
============================================================ */

// Checks for existing values within the form variables; otherwise, populates them with form submissions via $_POST
if (isset($_POST['name'], $_POST['email'])) { // Check
    // Variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    // Return form submissions
    echo ''.$name.' has filled out the form';
        echo '<br><br>';
    echo 'Their emails is '.$email.'';
} else { // show the form
    echo '
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name">
            <br><br>
        <label>Email</label>
        <input type="email" name="email">
            <br><br>
        <input type="submit" value="Send it!">
    </form>
    ';
}