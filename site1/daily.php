<?php
    include('includes/header.php');
?>

<head>
    <link href="css/daily-styles.css" type="text/css" rel="stylesheet">
</head>

<div class="wrapper">
    <main style='text-align: center'>
        <h1 style='text-align:center'>Welcome to the <em>Game of the Day</em> page!</h1>

        <br><hr><br>

        <h1 style="color: <?php $title_color ?>"> <?php echo $game; ?> </h1>

        <br>

        <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt ?>" height="300px" style='border: 1px solid rgb(78, 78, 78);     box-shadow: 0 10px 10px -10px rgb(129, 129, 129);' />

        <br><br>

        <p><?php echo $content ?><br><span style='float: right'><em><strong>Source:</strong> Wikipedia</em></span></p>

        <br><br>

        <p><strong>See games for other days of the week below:</strong></p>
        
        <br>
        
        <ul id='day_list'>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednsday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
    </main>

    <aside>

    </aside>
</div> <!-- end of wrapper -->

<?php
    include('includes/footer.php');
?>