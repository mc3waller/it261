<?php
// Games view page
include('includes/config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:games.php');
}

$sql = 'SELECT * FROM Games WHERE GamesID = '.$id.'';

// Connect to the database
$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql)
    or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) { // Show the records
    while($row = mysqli_fetch_assoc($result)) {

        $Title = stripslashes($row['Title']);
        $Developer = stripslashes($row['Developer']);
        $Genre = stripslashes($row['Genre']);
        $ReleaseYear = stripslashes($row['ReleaseYear']);
        $Platform = stripslashes($row['Platform']);
        $Description = stripslashes($row['Description']);
        $Feedback = '';
    }
} else {
    $Feedback = 'Sorry, no candidates';
}

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
    <h2>Viewing "<?php echo $Title; ?>"</h2>
    <?php
        if($Feedback == '') {
            echo '<ul>';
                echo '<li><b>Title:</b> '.$Title.'</li>';
                echo '<li><b>Developer:</b> '.$Developer.'</li>';
                echo '<li><b>Genre:</b> '.$Genre.'</li>';
                echo '<li><b>Release Year:</b> '.$ReleaseYear.'</li>';
                echo '<li><b>Platform(s):</b> '.$Platform.'</li>';
            echo '</ul>';
            echo '<br>'; // Temporary break tag to add space
            echo '<p>'.$Description.'</p>';
            echo '<br>'; // Temporary break tag to add space
            echo '<p><a href="games.php">Back to Catalog</a></p>';
        } else {
            echo $Feedback;
        }
    ?>
</main>

<aside>
    <?php
        if($Feedback == '') {
            echo '<a href="images/games'.$id.'.jpg" target="_blank"><img src="images/games'.$id.'.jpg" alt="'.$Title.'" style="border: 1px solid black; box-shadow: 0 10px 10px -10px rgb(0, 0, 0)"></a>';
        } else {
            echo $Feedback;
        }

        @mysqli_free_result($result);

        @mysqli_close($iConn);
    ?>
</aside>

<?php

    include('includes/footer.php');

?>