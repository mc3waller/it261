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
    <div class="content-post">
        <h1 class="center"><?php echo $mainHeadline; ?></h1>
        <p>You are looking at Malik Waller's final project presentation for Seattle Central College's PHP Web Application Programming class of Fall 2020. Indie Storm is a compact web source for information and reviews on indie games that I've played and wish to share with other gamers or those aspiring who want something remarkable to jump into. As a hobbiest game developer myself (who wishes to expand professionally), I felt it would be important for me to do as much as I can with the skills already available to me to exercise my interest in this medium so as to practice and learn more for my own projects. I'm pleased to have been able to build the first version of this site using PHP, as it's allowed me to explore and practice more options to enhance the site I ultimately wish to create.</p>
        <br>
        <h3 class="center">Disclaimer</h3>
        <p>This is an unofficial and modestly designed website showcasing independantly developed video games, created for educational purposes only (mine, to be precise). You will find borrowed text and images accompanied by the original sources. The website will remain a testing ground for the [tentative] official site and is not intended to be a reliable source of information or promise of competion. The author hopes that you, the viewer, will enjoy the functionality and design that has been thoughtfully put into this project.</p>
        <br>
        <p>If you have comments or quetions, feel free send your feedback via the <a href="contact.php">contact</a> form. Thank you for visiting!</p>
        <h3 class="center">Database Tables</h3>
        <a href="images/db_games_screenshot.JPG" target="_blank"><img class="content-img" src="images/db_games_screenshot.JPG" alt="Games database table"></a>
        <br>
        <a href="images/db_users_screenshot.JPG" target="_blank"><img class="content-img" src="images/db_users_screenshot.JPG" alt="Users database table"></a>
        <br>
    </div>

<?php

include('includes/footer.php');

?>