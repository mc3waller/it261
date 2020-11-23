<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Malik's Portal Page</title>
        <link href="css/portal-styles.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <header>
            <div class="row">
                <p>There should be a fancy logo here. <em>Should...</em>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="site1/daily.php">Switch - 3</a></li>
                <li><a href="week4/troubleshoot.php">Troubleshoot - 4</a></li>
                <li><a href="week5/trip-calculator.php">Calculator - 5</a></li>
                <li><a href="website/contact.php">Email - 6</a></li>
                <li><a href="">Gallery - 7</a></li>
                <li><a href="">Database - 8</a></li>
                <!-- <li><a href="">Database - 8</a></li> -->
            </ul>
        </nav>

        <div class="wrapper">
            <div class="main">
                <h1 style="text-align:center">Welcome to my Portal Page for <i>IT261 Fall 2020!</i></h1>
                <br><br>
                <h2 style="text-align:center">About Me</h2>
                <br>
                <img src="images/photo.jpg" id="my_photo" alt="Malik's photo" title="Some dude, idk" style="width: 50%; float: right; margin: 4px 15px 3px 0px; border: 1px solid rgb(78, 78, 78); box-shadow: 0 0 10px #666666" />
                <p>Oh, hello! Didn't see you there - and unfortunately at this rate, I probably never will! So, what better way to identify and introduce myself than with a small wall of text describing vaguely who I am and why I'm here?
                    <br><br>
                Born and raised in Seattle, Washington, I've spent most of my adult life working retail and entertainment jobs and became in urgent need of a career change; however, the entertainment work I did, consisting of singing and DJing, were as close to a dream job as I've ever gotten so far. Aside from that, I play more video games than what's probably best for me, but I justify this by constantly learning from them to aid me in creating my own. I also enjoy drawing, building models, mediocre cooking, and I currently live on Capitol Hill with my fiancée of four years.
                    <br><br>
                Having started the journy for my programming certificate in the summer of 2020, I'm currently on my second-to-last quarter and can finally see the light at the end of the tunnel! It began as an attempt to get my foot in the door of the tech world in hopes of taking up professional game design and development, but having picked up so many new unexpected skills along the way, I've taken an interest in software and front-end web development as well. We'll see what the future holds, because at this point my priorities are kind of all over the place.
                </p>
                <br><br>
                <hr />
                <br><br>
                <h2 style="text-align:center">Week 2 Screeshots</h2>
                <br><br>
                <h3 style="text-align:center">MAMP</h3>
                <br>
                <a href="https://malwal2.dreamhosters.com/it261/images/mamp_page.JPG"><img src="images/mamp_page.JPG" class="centered" alt="MAMP page" title="MAMP page" style="box-shadow: 0 0 10px #666666" /></a>
                <br><br>
                <h3 style="text-align:center">Error Reporting</h3>
                <br>
                <a href="https://malwal2.dreamhosters.com/it261/images/error_report.JPG"><img src="images/error_report.JPG" class="centered" alt="Error report" title="Error report" style="box-shadow: 0 0 10px #666666" /></a>
            </div>

            <div class="aside">
                <h2>CLASSWORK ASSIGNMENTS</h2>
                Week 2
                <ul>
                    <li><a href="week2/var.php">var.php</a></li>
                    <li><a href="week2/currency.php">currency.php</a></li>
                    <li><a href="week2/heredoc.php">heredoc.php</a></li>
                </ul>
                Week 3
                <ul>
                    <li><a href="week3/arrays.php">arrays.php</a></li>
                    <li><a href="week3/html-page.php">html-page.php</a></li>
                    <li><a href="week3/if.php">if.php</a></li>
                    <li><a href="week3/switch.php">switch.php</a></li>
                </ul>
                Week 4
                <ul>
                    <li><a href="week4/form1.php">form1.php</a></li>
                    <li><a href="week4/form2.php">form2.php</a></li>
                </ul>
                Week 5
                <ul>
                    <li><a href="week5/currency-final.php">currency-final.php</a></li>
                </ul>
                Week 6
                <ul>
                    <li><a href="week6/form-emailable.php">form-emailable.php</a></li>
                    <li><a href="week6/functions.php">functions.php</a></li>
                    <li><a href="week6/random-count.php">random-count.php</a></li>
                    <li><a href="website/index.php">website/index.php</a></li>
                    <li><a href="website/contact.php">website/contact.php</a></li>
                    <li><a href="website/thx.php">website/thx.php</a></li>
                </ul>
                Week 7
                <ul>
                    <li><a href="week7/substr-str_replace.php">substr-str_replace.php</a></li>
                </ul>
                Week 8
                <ul>
                    <li><a href=""></a><em>Coming soon...</em></li>
                </ul>
            </div>

            <div class="aside">
                <h2>FINAL ASSIGNMENT</h2>
                <br>
                <p>The final assignment will link to a different website, located inside my IT261 folder.</p>
                <br>
                <a href="">Click here</a> to view the assignment.
            </div>
        </div> <!-- end of wrapper -->

        <footer>
            <div class="copyright">
                <div class="row">
                    <ul style="font-size:90%; text-align:center">
                        <li>
                            Copyright &copy; <?php
                            $startDate = 2020;
                            $currentDate = date('Y');
                            if($startDate == $currentDate) {
                                echo $currentDate;
                            } else {
                                echo ''.$startDate.' - '.$currentDate.'';
                            } ?>
                        </li>
                        <li>All Rights Reserved</li>
                        <li><a href="">Terms of Use</a></li>
                        <li><a href="">Web Design by Malik Waller</a></li>
                        <li><a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fmalwal2.dreamhosters.com%2Fit261%2Findex.php"><img src="images/html5logo.svg" height="40" alt="HTML 5 logo" title="HTML 5 validated!" /></a></li>
                        <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fmalwal2.dreamhosters.com%2Fit261%2Findex.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en"><img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="W3C CSS logo"  title="Validated CSS!" /></a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </body>
</html>