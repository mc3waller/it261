<?php // Server page

session_start();
include('config.php');

// Initialize variables

$FirstName = '';
$LastName = '';
$UserName = '';
$Email = '';
$errors = array();
$success = 'You are now logged in!';

// Connect to database
// $db = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Register the user

if(isset($_POST['reg_user'])) {
    // IF true, receive all of the following information:
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
    $Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);
    
    // The array push function can add the exact error that will be referred to

    if(empty($FirstName)) {
        array_push($errors, 'First name is required');
    }
    if(empty($LastName)) {
        array_push($errors, 'Last name is required');
    }
    if(empty($UserName)) {
        array_push($errors, 'Username is required');
    }
    if(empty($Email)) {
        array_push($errors, 'Email is required');
    }
    if(empty($Password_1)) {
        array_push($errors, 'Password is required');
    }
    if($Password_1 != $Password_2) {
        array_push($errors, 'Passwords do not match match!');
    }

    // Check for existing username or email upon registration
    
    $user_check_query = "SELECT * FROM users WHERE UserName = '$UserName' OR Email = '$Email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user) {
        if($user['UserName'] == $UserName) {
            array_push($errors, 'Username already exists');
        }
        
        if($user['Email'] == $Email) {
            array_push($errors, 'Email already exists');
        }

    } // End if($user) match conditions

    // IF registration valid with no errors:
    
    if(count($errors) == 0) {
        $Password = md5($Password_1);

        $query = "INSERT INTO Users (FirstName, LastName, UserName, Email, Password) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password')";

        mysqli_query($db, $query);

        $_SESSION['UserName'] = $UserName;
        $_SESSION['success'] = $success;

        header('Location: login.php');
    } // End count

} // End isset

if(isset($_POST['login_user'])) {
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);

    $Password = mysqli_real_escape_string($db, $_POST['Password']);

    if(empty($UserName)) {
        array_push($errors, 'Username is required');
    }

    if(empty($Password)) {
        array_push($errors, 'Password is required');
    }

    if(count($errors) == 0) {
        $Password = md5($Password);

        $query = "SELECT * FROM Users WHERE username = '$UserName' AND password = '$Password' ";

        $results = mysqli_query($db, $query);

        if(mysqli_num_rows($results) == 1) {
            $_SESSION['UserName'] = $UserName;
            $_SESSION['success'] = $success;

            header('Location: index.php');
        } else {
            array_push($errors, 'Wrong username/password combination');
        }

    } // End count

} // End isset

?>