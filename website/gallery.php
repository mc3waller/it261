<?php

include('includes/config.php');
include('includes/header.php');

?>

<div id="wrapper">
    <main>
        <h1><?php echo $mainHeadline; ?></h1>

        <table class="candidates">
        <?php foreach($people as $fullName => $image) : ?>
            <tr>
                <td>
                    <img src="images/<?php echo substr($image, 0, 5) ?>.jpg" alt="<?php echo $fullName; ?>">
                </td>
                <td>
                    <?php echo str_replace('_', ' ', $fullName); ?>
                </td>
                <td>
                    <?php echo substr($image, 6); ?>
                </td>
            </tr>
        <?php endforeach ; ?>
        </table>
    </main>

    <aside>
        <h3>This is my headline 3 ont he gallery page</h3>
        <?php echo randImages2($candidates); ?>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa recusandae alias dolores commodi ab nemo suscipit assumenda eligendi, impedit doloremque quasi eum quo beatae cupiditate consectetur corporis eos dicta officia?</p>
    </aside>
    

<?php

include('includes/footer.php');

?>