            <footer>
                <!-- <ul>
                    <li>&copy; Copyright <?php echo date('Y'); ?></li>
                    <li><a href="">Web Design by Malik Waller</a></li>
                    <li><a href="https://validator.w3.org/check?uri=referer">HTML Valid</a></li>
                    <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS Valid</a></li>
                </ul> -->

                <ul>
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
                    <li><a href="">Web Design by Malik Waller</a></li>
                    <li><a href="https://validator.w3.org/check?uri=referer">HTML Valid</a></li>
                    <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS Valid</a></li>
                </ul>
            </footer>
        </div> <!-- end wrapper -->
    </body>
</html>