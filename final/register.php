<?php // Registration form
    include('server.php');
    include('includes/header.php');


    
?>

<div class="wrapper">

    <h1 class="center">Register</h1>

    <form id="register-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>First Name</label>
                <input type="text" name="FirstName" value="<?php if(isset($_POST['FirstName'])) echo $_POST['FirstName']; ?>">

            <label>Last Name</label>
                <input type="text" name="LastName" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName']; ?>">
            
            <label>User Name</label>
                <input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">

            <label>Email</label>
                <input type="text" name="Email" value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>">
            
            <label>Password</label>
                <input type="password" name="Password_1">

            <label>Confirm Password</label>
                <input type="password" name="Password_2">

            <button type="submit" class="btn" name="reg_user">Register</button>

            <button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">RESET</button>

            <?php
                include('includes/errors.php');
            ?>
        </fieldset>
    </form>

    <p class="center">Already have an account? <a href="login.php">Login here!</a></p>

<?php

include('includes/footer.php');

?>