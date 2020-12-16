<?php
    include('includes/config.php');
    include('includes/header.php');
    // Connecting to the database
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
    <?php
        $sql = 'SELECT * FROM Games';

        $iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

        $result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

        // Do we have more than 0 rows?

        if(mysqli_num_rows($result) > 0) { // Show the records
            while($row = mysqli_fetch_assoc($result)) {
                // This array will display the contents of the row
                echo '<ul>'; // Use an anchor value similar to that used for the Switch assignment
                    echo '<li><strong>'.$row['Title'].'</strong></li>';
                    echo '<li>Developed by '.$row['Developer'].'</li>';
                    echo '<li class="bold"><a href="games-view.php?id='.$row['GamesID'].' ">View Details</a></li>';
                echo '</ul>';
                echo '<br>'; // Temporary break tag to add space
            } // End of while loop
        } else { // If there are no games
            echo 'No games to display.';
        } // End of else

        // Release web server
        @mysqli_free_result($result);

        // Close the connection
        @mysqli_close($iConn);
    ?>

    <p class="center" style="font-size:95%; padding: 20px"><em>More coming soon!</em></p>
</main>

<aside>
    <h2>About Indie Games</h2>
    <p>An independent video game or indie game is a video game typically created by individuals or smaller development teams without the financial and technical support of a large game publisher, in contrast to most "AAA" (triple-A) games. However, the "indie" term may apply to other scenarios where the development of the game has some measure of independence from a publisher even if a publishers helps fund and distribute a game, such as creative freedom. Because of their independence and freedom to develop, indie games often focus on innovation, experimental gameplay, and taking risks not usually afforded in AAA games, and may explore the medium to produce unique experiences in art games. Indie games tend to be sold through digital distribution channels rather than at retail due to lack of publisher support. The term is synonymous with that of independent music or independent film in those respective mediums.</p>
    <p style="text-align:right"><em>- <strong>Source:</strong> Wikipedia</em></p>
    <img class="content-img" src="images/deadcells.png" alt="Dead Cells">
</aside>

<?php

    include('includes/footer.php');

?>