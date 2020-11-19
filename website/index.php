<?php

include('includes/config.php');
include('includes/header.php');

?>

<div id="wrapper">
    <h1 class="center" <?php $center; ?>><?php echo $mainHeadline; ?></h1>
    <p class="center"><?php echo randImages($photos); ?></p>

    <blockquote>
        "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa recusandae alias dolores commodi ab nemo suscipit assumenda eligendi, impedit doloremque quasi eum quo beatae cupiditate consectetur corporis eos dicta officia?"
    </blockquote>

    <p class="center"><a href="">Here is my EXTRA CREDIT LINK to my GitHub account showing my randImages function (index.php and config.php)</a></p>

<?php

include('includes/footer.php');

?>