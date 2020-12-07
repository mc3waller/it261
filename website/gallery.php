<?php

include('includes/config.php');
include('includes/header.php');

?>

<div id="wrapper">
    <main>
        <h1><?php echo $mainHeadline; ?></h1>

        <table class="screenshots">
        <?php foreach($screenshot as $title => $image) : ?>
            <tr>
                <th></th>
                <th>Game</th>
                <th>Developer</th>
            </tr>
            <tr>
                <td>
                    <a href="images/<?php echo substr($image, 0, 5) ?>.jpg" target="_blank"><img src="images/<?php echo substr($image, 0, 5) ?>.jpg" alt="<?php echo $title; ?>" style="width:300px; border: 1px solid black; box-shadow: 0 10px 10px -10px rgb(129, 129, 129)"></a>
                </td>
                <td>
                    <?php echo str_replace('_', ' ', $title); ?>
                </td>
                <td>
                    <?php echo substr($image, 6); ?>
                </td>
            </tr>
        <?php endforeach ; ?>
        </table>
    </main>

    <aside id="gallery-aside">
        <h3>Random Featured Image</h3>
        <?php echo randImages2($featured); ?>
        <p>Random images from games in our <a href="games.php">catalog</a>, plus some other honorable mentions!</p>
    </aside>
    

<?php

include('includes/footer.php');

?>