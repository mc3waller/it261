<?php
// In orde to view this page, a user must have registered and logged in; otherwise, they must be directed to do so

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


include('includes/header.php');
?>

<h1>Welcome to our home page!</h1>

<?php
// Notification message
if(isset($_SESSION['success]'])) : ?>
<div class="error success">
    <h3>
        <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?>
    </h3>
</div>
<?php endif ?>


<div class="error success">
    <?php
        if(isset($_SESSION['UserName'])) : ?>
        <h3> Welcome,
            <?php echo $_SESSION['UserName']; ?>
        </h3>
        <br>
        <p><a href="index.php?logout='1'">Log out!</a></p>
</div>
<?php endif ?>