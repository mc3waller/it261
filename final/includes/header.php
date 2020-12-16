<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <link href="css/styles.css" type="text/css" rel=stylesheet>
</head>

<body class="<?php echo $body; ?>">
    <header>
        <div class="inner-header">
            <a href="index.php"><img id="logo" src="./images/sitelogo.png" alt="logo"></a>
            <h1 id="site-title">INDIE ► STORM</h1>

            <nav>
                <ul>
                    <?php echo makeLinks($nav); ?>
                </ul>
            </nav>
        </div> <!-- end inner header -->
    </header>