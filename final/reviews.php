<?php
    include('includes/config.php');
    include('includes/header.php');
?>

<div class="wrapper">
    <?php
        session_start();
        // include('config.php');
        if(!isset($_SESSION['UserName'])) {
            $_SESSION['msg'] = 'You must log in first';
            header('Location: login.php');
        }

        if(isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['UserName']);
            header('Location: login.php');
        }
    ?>

    <?php
        // Notification message
        if(isset($_SESSION['success]'])) :
    ?>
    <div class="error success">
        <h3>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

    <div class="error success center">
        <?php
            if(isset($_SESSION['UserName'])) :
        ?>
        <p>Hello, <strong><?php echo $_SESSION['UserName']; ?></strong>! You are now logged in. <a href="index.php?logout='1'">Log out</a></p>
    </div>
    <?php endif ?>
</div>

<?php

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday' :
        $game = 'Child of Light';
        // $back_color = 'fsunday';
        $pic = 'child_of_light.jpg';
        $alt = 'Child of Light';
        $content = 'Child of Light is a platforming role-playing video game developed by Ubisoft Montreal and published by Ubisoft in April 2014. The game was later released on Nintendo Switch on 11 October 2018; the announcement of this release also teased a sequel. It is powered by UbiArt Framework. The game\'s story takes place in the fictional land of Lemuria. Aurora, a child who wakes up in Lemuria after dying from a mysterious illness, must bring back the sun, the moon, and the stars that are all being held captive by the Queen of the Night in order to return home. The game received critical acclaim, with particular praise for its visuals, presentation, gameplay, soundtrack and story.
        <br>
        <div class="center" style="text-align: center">
        <h2>Our Rating</h2>
        <strong>Gameplay: ★★★★</strong>   <strong>Presentation: ★★★</strong>
        <br>
        <strong>Visuals: ★★★★</strong>   <strong>Sound: ★★★★★</strong>
        <br><br>
        <strong>Overall</strong>: ★★★★ <br> "Great"
        </div>';
    break;
    case 'Monday' :
        $game = 'Journey';
        // $back_color = 'monday';
        $pic = 'journey.jpg';
        $alt = 'Journey';
        $content = 'Journey is an indie adventure game co-developed by Thatgamecompany and Santa Monica Studio, published by Sony Computer Entertainment, and directed by Jenova Chen. It was released in July 2015. In Journey, the player controls a robed figure in a vast desert, traveling towards a mountain in the distance. Reviewers of the game praised the visual and auditory art as well as the sense of companionship created by playing with a stranger, calling it a moving and emotional experience, and have since listed it as one of the greatest video games of all time.
        <br>
        <div class="center" style="text-align: center">
        <h2>Our Rating</h2>
        <strong>Gameplay: ★★★★</strong>   <strong>Presentation: ★★★★★</strong>
        <br>
        <strong>Visuals: ★★★★★</strong>   <strong>Sound: ★★★★★</strong>
        <br><br>
        <strong>Overall</strong>: ★★★★★ <br> "Excellent"
        </div>';
    break;
    case 'Tuesday' :
        $game = 'Dead Cells';
        // $back_color = 'tuesday';
        $pic = 'games3.jpg';
        $alt = 'Dead Cells';
        $content = 'Dead Cells is a roguelike action platformer video game inspired by Metroidvania-style games, developed and published by Motion Twin. In the game, the player takes the role of a slime-like creature that takes control of a corpse in a dungeon, through which they must fight their way out. The player gains various weapons, treasure and other tools through exploration of the procedurally-generated levels to fight undead creatures within it. At times, the player gains "cells", a type of in-game currency that can be used to purchase permanent upgrades or unlock items. Dead Cells uses a permadeath system, causing the player to lose all cells and other currencies or items upon each instance of death. Motion Twin was inspired by The Binding of Isaac in developing the game.
        <br>
        <div class="center" style="text-align: center">
        <h2>Our Rating</h2>
        <strong>Gameplay: ★★★★★</strong>   <strong>Presentation: ★★★</strong>
        <br>
        <strong>Visuals: ★★★</strong>   <strong>Sound: ★★★★</strong>
        <br><br>
        <strong>Overall</strong>: ★★★★ <br> "Great"
        </div>';
    break;
    case 'Wednesday' :
        $game = 'Bastion';
        // $back_color = 'wednsday';
        $pic = 'bastion.jpg';
        $alt = 'Bastion';
        $content = 'Bastion is an action role-playing video game developed by independent developer Supergiant Games and originally published in 2011 by Warner Bros. Interactive Entertainment. In the game, the player controls "the Kid" as he moves through floating, fantasy-themed environments and fights enemies of various types. It features a dynamic voiceover from a narrator, and is presented as a two-dimensional game with an isometric camera and a hand-painted, colorful art style. Bastion\'s story follows the Kid as he collects special shards of rock to power a structure, the Bastion, in the wake of an apocalyptic Calamity.
        <br>
        <div class="center" style="text-align: center">
        <h2>Our Rating</h2>
        <strong>Gameplay: ★★★★</strong>   <strong>Presentation: ★★★★</strong>
        <br>
        <strong>Visuals: ★★★</strong>   <strong>Sound: ★★★★★</strong>
        <br><br>
        <strong>Overall</strong>: ★★★★ <br> "Great"
        </div>';
    break;
    case 'Thursday' :
        $game = 'Hollow Knight';
        // $back_color = 'thursday';
        $pic = 'hollow_knight.jpg';
        $alt = 'Hollow Knight';
        $content = 'Hollow Knight is a 2017 action-adventure game developed and published by Team Cherry, and was released in 2017. Development was partially funded through a Kickstarter crowdfunding campaign, raising over $57,000 by the end of 2014. The game follows a nameless knight, as they traverse an ancient plague-infested kingdom inhabited by various insects, known as Hallownest. The Knight must travel through Hallownest, fighting bosses and unlocking new abilities to progress, as they uncover the mysteries of the kingdom.
        <br>
        <div class="center" style="text-align: center">
        <h2>Our Rating</h2>
        <strong>Gameplay: ★★★★</strong>   <strong>Presentation: ★★</strong>
        <br>
        <strong>Visuals: ★★★</strong>   <strong>Sound: ★★★</strong>
        <br><br>
        <strong>Overall</strong>: ★★★ <br> "Good"
        </div>';
    break;
    case 'Friday' :
        $game = 'Spiritfarer';
        // $back_color = 'friday';
        $pic = 'spiritfarer.jpg';
        $alt = 'Spiritfarer';
        $content = 'Spiritfarer is an indie management sim and sandbox action game developed and published by Canadian studio Thunder Lotus Games and released on August 18, 2020. The main character, Stella, becomes a "Spiritfarer" whose job it is to ferry spirits of the deceased to the afterlife. It received generally positive reviews from critics, praising its slow-paced gameplay, detailed animation, orchestral musical score and unique themes.
        <br>
        <div class="center" style="text-align: center">
        <h2>Our Rating</h2>
        <strong>Gameplay: ★★★★</strong>   <strong>Presentation: ★★★★★</strong>
        <br>
        <strong>Visuals: ★★★★</strong>   <strong>Sound: ★★★★</strong>
        <br><br>
        <strong>Overall</strong>: ★★★★★ <br> "Excellent"
        </div>';
    break;
    case 'Saturday' :
        $game = 'Ori and the Will of the Wisps';
        // $back_color = 'saturday';
        $pic = 'ori_wisps.jpg';
        $alt = 'Ori and the Will of the Wisps';
        $content = 'Ori and the Will of the Wisps is a platform-adventure Metroidvania video game developed by Moon Studios and published by Xbox Game Studios.  The title is a direct sequel to 2015\'s Ori and the Blind Forest and was released on March 11, 2020. The game\'s visuals were given an overhaul from the two-dimensional artwork in Blind Forest, to the three-dimensional models played in multilayered backgrounds in Will of the Wisps. The game maintains narrative continuity with Blind Forest and introduces new melee combat. Upon release, the game received universal acclaim with players and critics praising the game\'s visuals, improved combat, elements of exploration, environments, chase sequences, and soundtrack.
        <br>
        <div class="center" style="text-align: center">
        <h2>Our Rating</h2>
        <strong>Gameplay: ★★★★</strong>   <strong>Presentation: ★★★★★</strong>
        <br>
        <strong>Visuals: ★★★★★</strong>   <strong>Sound: ★★★★★</strong>
        <br><br>
        <strong>Overall</strong>: ★★★★★ <br> "Excellent"
        </div>';
    break;
}

?>

<div class="wrapper">
    <main>
        <h1><?php echo $mainHeadline; ?></h1>
        <h2 class="center">Featuring: "<?php echo $game; ?>"</h2>
        <img class="content-img" src="images/<?php echo $pic; ?>" alt="<?php echo $alt ?>" width="500"/>
        <br>
        <p><?php echo $content ?>
        <br>
        <span style='float: right'><em><strong>Source:</strong> Wikipedia</em></span></p>
    </main>

    <aside>
        <h2>Weekly Showcase</h2>
        <p>Check out more featured games we've reviewed from other days of the week! Stay tuned, as we will be expanding the content and criteria of our reviews in the future to be more descriptive and less biased.</p>
            <ul class="center">
                <li><a href="reviews.php?today=Sunday">Sunday</a></li>
                <li><a href="reviews.php?today=Monday">Monday</a></li>
                <li><a href="reviews.php?today=Tuesday">Tuesday</a></li>
                <li><a href="reviews.php?today=Wednesday">Wednsday</a></li>
                <li><a href="reviews.php?today=Thursday">Thursday</a></li>
                <li><a href="reviews.php?today=Friday">Friday</a></li>
                <li><a href="reviews.php?today=Saturday">Saturday</a></li>
            </ul>
    </aside>

<?php
    include('includes/footer.php');
?>