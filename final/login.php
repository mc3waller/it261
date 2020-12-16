<?php // Login page as a simple form

include('server.php');
include('includes/header.php');

?>

<div class="wrapper">

    <h1 class="center">Login</h1>


    <form id="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>


            <label>Username</label>
                <input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">
            
            <label>Password</label>
                <input type="password" name="Password">
            <?php
                include('includes/errors.php');
            ?>

            <button type="submit" class="btn" name="login_user">Login</button>

            <button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">RESET</button>

        </fieldset>
        
    </form>

    <p class="center">Don't have an account? <a href="register.php">Register here!</a></p>

<?php

include('includes/footer.php');

?>