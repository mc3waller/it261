<?php

include('includes/config.php');
include('includes/header.php');

?>

<div class="wrapper">
    <?php
        session_start();
        // include('config.php');
        if(!isset($_SESSION['UserName'])) {
            $_SESSION['msg'] = 'You must log in first';
            header('Location: login.php');
        }

        if(isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['UserName']);
            header('Location: login.php');
        }
    ?>

    <?php
        // Notification message
        if(isset($_SESSION['success]'])) :
    ?>
    <div class="error success">
        <h3>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

    <div class="error success center">
        <?php
            if(isset($_SESSION['UserName'])) :
        ?>
        <p>Hello, <strong><?php echo $_SESSION['UserName']; ?></strong>! You are now logged in. <a href="index.php?logout='1'">Log out</a></p>
    </div>
    <?php endif ?>
</div>

<div class="wrapper">
    <h1 class="center" <?php $center; ?>><?php echo $mainHeadline; ?></h1>
    <img class="content-img" src="images/epistory.jpg" alt="Epistory" width="600">

    <hr />

    <div class="content-post">
        <h2>Site Debut</h2>
        <p style="font-size: 90%"><strong>Posted:</strong> Dec. 16, 2020</p>
        <p>The Indie Storm website prototype is now live! Welcome to Malik Waller's final project presentation for Seattle Central College's PHP Web Application Programming class of Fall 2020. This website will remain a testing ground for the [tentative] official site and is not intended to be a reliable source of information or promise of completion. If you have comments or quetions, feel free send your feedback via the <a href="contact.php">contact</a> form. Thank you for visiting!
        <br><br>
        For more information, read all about us <a href="about.php">here</a>.</p>
    </div>

    <hr />

    <p style="text-align: center"><a href="">Archive</a></p>

<?php

include('includes/footer.php');

?>