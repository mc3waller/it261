<?php

/* ============================================================
HEREDOC SYNTAX

A paragraph of information with multiple quotes and other
characters that typically require an escape character. This
instead uses: <<<EOT[statement]EOT;
============================================================ */


// $book = 'Handmaid\'s Tale';
// echo $book;
// With an escape character

// $book = "Handmaid's Tale";
// echo $book;
// Using opposite quotations

$book = 'Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$content = <<<EOT
<p>I have never read $book, written by $author and is presently a miniseries on Hulu. Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award winning "Handmaid's Tale."</p>
<p>The actor $actor's rendition is spot on. This content will work, because all of the content is displayed in orange and the variables are displayed in blue."</p>
EOT;

echo $content;
// heredoc syntax (also requires semicolon)