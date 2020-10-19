<?php

/*
The logic behind the title variable and the body class variable is:
IF we are on the home page, then the title will be this...
IF we are on the daily page, the title will be something else

How do we know which page we're on? By the basename() functon
Define a constant and use the basename() function
*/

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Home page of Classwork';
        $body_class = 'home';
    break;
    
    case 'daily.php' :
        $title = 'Daily page of Classwork';
        $body_class = 'daily inner';
    break;
}

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday' :
        $game = 'Child of Light';
        $back_color = 'fsunday';
        $pic = 'child_of_light.jpg';
        $alt = 'Child of Light';
        $content = 'Child of Light is a platforming role-playing video game developed by Ubisoft Montreal and published by Ubisoft in April 2014. The game was later released on Nintendo Switch on 11 October 2018; the announcement of this release also teased a sequel. It is powered by UbiArt Framework. The game\'s story takes place in the fictional land of Lemuria. Aurora, a child who wakes up in Lemuria after dying from a mysterious illness, must bring back the sun, the moon, and the stars that are all being held captive by the Queen of the Night in order to return home. The game received critical acclaim, with particular praise for its visuals, presentation, gameplay, soundtrack and story.';
    break;
    case 'Monday' :
        $game = 'Journey';
        $back_color = 'monday';
        $pic = 'journey.jpg';
        $alt = 'Journey';
        $content = 'Journey is an indie adventure game co-developed by Thatgamecompany and Santa Monica Studio, published by Sony Computer Entertainment, and directed by Jenova Chen. It was released in July 2015. In Journey, the player controls a robed figure in a vast desert, traveling towards a mountain in the distance. Reviewers of the game praised the visual and auditory art as well as the sense of companionship created by playing with a stranger, calling it a moving and emotional experience, and have since listed it as one of the greatest video games of all time.';
    break;
    case 'Tuesday' :
        $game = 'Gris';
        $back_color = 'tuesday';
        $pic = 'gris.jpg';
        $alt = 'Gris';
        $content = 'Gris is a platform-adventure game by Spanish indie developer Nomada Studio and published by Devolver Digital. The game was released in December 2018. The game follows a girl named Gris, who wakes up in the palm of a crumbling statue of a woman. She attempts to sing out, but quickly becomes choked up and the statue\'s hands crumble, dropping her to the colourless earth below. After landing, the girl continues walking forward and discovers a number of strange structures that seem to be powered by mysterious points of light resembling stars. The girl can collect these lights to gain new abilities, such as turning into a block of stone, and creating new pathways made of constellations.';
    break;
    case 'Wednesday' :
        $game = 'Bastion';
        $back_color = 'wednsday';
        $pic = 'bastion.jpg';
        $alt = 'Bastion';
        $content = 'Bastion is an action role-playing video game developed by independent developer Supergiant Games and originally published in 2011 by Warner Bros. Interactive Entertainment. In the game, the player controls "the Kid" as he moves through floating, fantasy-themed environments and fights enemies of various types. It features a dynamic voiceover from a narrator, and is presented as a two-dimensional game with an isometric camera and a hand-painted, colorful art style. Bastion\'s story follows the Kid as he collects special shards of rock to power a structure, the Bastion, in the wake of an apocalyptic Calamity.';
    break;
    case 'Thursday' :
        $game = 'Hollow Knight';
        $back_color = 'thursday';
        $pic = 'hollow_knight.jpg';
        $alt = 'Hollow Knight';
        $content = 'Hollow Knight is a 2017 action-adventure game developed and published by Team Cherry, and was released in 2017. Development was partially funded through a Kickstarter crowdfunding campaign, raising over $57,000 by the end of 2014. The game follows a nameless knight, as they traverse an ancient plague-infested kingdom inhabited by various insects, known as Hallownest. The Knight must travel through Hallownest, fighting bosses and unlocking new abilities to progress, as they uncover the mysteries of the kingdom.';
    break;
    case 'Friday' :
        $game = 'Spiritfarer';
        $back_color = 'friday';
        $pic = 'spiritfarer.jpg';
        $alt = 'Spiritfarer';
        $content = 'Spiritfarer is an indie management sim and sandbox action game developed and published by Canadian studio Thunder Lotus Games and released on August 18, 2020. The main character, Stella, becomes a "Spiritfarer" whose job it is to ferry spirits of the deceased to the afterlife. It received generally positive reviews from critics, praising its slow-paced gameplay, detailed animation, orchestral musical score and unique themes.';
    break;
    case 'Saturday' :
        $game = 'Ori and the Will of the Wisps';
        $back_color = 'saturday';
        $pic = 'ori_wisps.jpg';
        $alt = 'Ori and the Will of the Wisps';
        $content = 'Ori and the Will of the Wisps is a platform-adventure Metroidvania video game developed by Moon Studios and published by Xbox Game Studios.  The title is a direct sequel to 2015\'s Ori and the Blind Forest and was released on March 11, 2020. The game\'s visuals were given an overhaul from the two-dimensional artwork in Blind Forest, to the three-dimensional models played in multilayered backgrounds in Will of the Wisps. The game maintains narrative continuity with Blind Forest and introduces new melee combat. Upon release, the game received universal acclaim with players and critics praising the game\'s visuals, improved combat, elements of exploration, environments, chase sequences, and soundtrack.';
    break;
}

?>


<!doctype html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <link href="css/daily-styles.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php echo $body_class; ?> <?php echo $back_color ?>">

    <header>
        <div class="row">
            <img id="logo" src="images/logo.png" alt="PHP logo">
        </div> <!-- end row -->
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="daily.php">Daily</a></li>
            <li><a href="">Customer</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </nav>