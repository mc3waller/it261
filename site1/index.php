<?php

/* php can go here */

?>



<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="uf-8">
        <title>Classwork Website Home Page</title>
        <link href="css/styles.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div class="row">
                <img id="logo" src="images/logo.png" alt="PHP logo">
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Daily</a></li>
                <li><a href="">Customer</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>

        <div class="wrapper">
            <main>
                <h1>Welcome to my Home Page - PHP Page!</h1>
            </main>

            <aside>

            </aside>
        </div> <!-- end of wrapper -->

        <footer>
            <div class="copyright">
                <div class="row">
                    <ul>
                        <li>
                            &copy; Copyright 2020 - <?php
                            echo date('Y');
                            ?>
                        </li>
                        <li>All Rights Reserved</li>
                        <li><a href="">Terms of Use</a></li>
                        <li><a href="">Web Design by Malik Waller</a></li>
                    </ul>

                </div> <!-- end of row -->
            </div> <!-- end of copright -->
        </footer>

    </body>
</html>