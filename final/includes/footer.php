            <footer>
                <p style="font-size: 90%">Copyright &copy; <?php
                    $startDate = 2020;
                    $currentDate = date('Y');
                    if($startDate == $currentDate) {
                        echo $currentDate;
                    } else {
                        echo ''.$startDate.' - '.$currentDate.'';
                    } ?> | <a href="">Web Design by Malik Waller</a> | <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fmalwal2.dreamhosters.com%2Fit261%2Ffinal%2F" target="_blank">HTML Valid</a> | <a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fmalwal2.dreamhosters.com%2Fit261%2Ffinal%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank">CSS Valid</a></p>
            </footer>
        </div> <!-- end wrapper -->
    </body>
</html>