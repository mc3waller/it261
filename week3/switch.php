<?php

/* ============================================================
SWITCH

/* For this exercise, we are learning about "isset", the
$_GET global variable, and "switch"
============================================================ */


// $var100 = 'test';
// if (isset($var1)) {
//     print_r(isset($var1));
// } else {
//     echo 'It has not been set';
// }

// Is today set? [And] If today is set, yippy skippy
// Else, the date function for the day will be assigned to today

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday' :
        $coffee = 'Friday is Frappuccino Day!';
        $pic = 'frap.jpg';
        $alt = 'Frappuccino';
        $content = 'Frappuccino content in at least one paragrpah.';
    break;
    case 'Saturday' :
        $coffee = 'Saturday is Regular Joe Day!';
        $pic = 'joe.jpg';
        $alt = 'Regular Joe';
        $content = 'Regular Joe content in at least one paragrpah.';
    break;
    case 'Sunday' :
        $coffee = 'Sunday is Cappuccino Day!';
        $pic = 'cap.jpg';
        $alt = 'Cappuccino';
        $content = 'Cappuccino content in at least one paragrpah.';
    break;
    case 'Monday' :
        $coffee = 'Monday is Latte Day!';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = 'Latte Day content in at least one paragrpah.';
    break;
    case 'Tuesday' :
        $coffee = 'Tuesday is Americano Day!';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = 'Americano content in at least one paragrpah.';
    break;
    case 'Wednesday' :
        $coffee = 'Wednesday is Cold Brew Day!';
        $pic = 'coldbrew.jpg';
        $alt = 'Cold Brew';
        $content = 'Cold Brew content in at least one paragrpah.';
    break;
    case 'Thursday' :
        $coffee = 'Thursday is Pumpkin Latte Day!';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin';
        $content = 'Pumpkin Latte content in at least one paragrpah.';
    break;
}

?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Switch Page</title>
    </head>

    <body>
        <h1><?php echo $coffee; ?></h1>
        <p>Click below to find out what awesome flavors we have for each day of the week!</p>

        <p><?php echo $content ?></p>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednsday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
        <img src="../images/<?php echo $pic; ?>" alt="<?php echo $alt ?>" height="300px" />
    </body>
    
</html>