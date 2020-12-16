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
    <main>
        <h1><?php echo $mainHeadline; ?></h1>
        <?php include('includes/form.php'); ?>
    </main>

    <aside>
        <h2>Give us your feedback</h2>
        <p>Let us know your thoughts on our website and share with us some of your preferred gaming platforms! You may also choose to subscribe to our mailing list, which doesn't actually do anything at the moment.
    </aside>
    

<?php

include('includes/footer.php');

?>