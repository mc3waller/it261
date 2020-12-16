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

        <table class="screenshots">
        <?php foreach($screenshot as $title => $image) : ?>
            <tr>
                <th></th>
                <th>Game</th>
                <th>Developer</th>
            </tr>
            <tr>
                <td>
                    <a href="images/<?php echo substr($image, 0, 5) ?>.jpg" target="_blank"><img src="images/<?php echo substr($image, 0, 5) ?>.jpg" alt="<?php echo $title; ?>" style="width:300px; border: 1px solid black; box-shadow: 0 10px 10px -10px rgb(0, 0, 0)"></a>
                </td>
                <td>
                    <?php echo str_replace('_', ' ', $title); ?>
                </td>
                <td>
                    <?php echo substr($image, 6); ?>
                </td>
            </tr>
        <?php endforeach ; ?>
        </table>
    </main>

    <aside id="gallery-aside">
        <h2>Random Featured Image</h2>
        <?php echo randImages2($featured); ?>
        <p>Random images from games in our <a href="games.php">catalog</a>, plus some other honorable mentions!</p>
    </aside>
    

<?php

include('includes/footer.php');

?>