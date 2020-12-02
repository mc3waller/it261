<?php

$statement = 'The Presidential Election is around the corner';
echo $statement;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 0, 3);
echo '<br>';
echo substr($statement, 4, 12);
echo '<br>';
echo substr($statement, 4, 21);
echo '<br>';
echo substr($statement, -6);
echo '<br>';
echo substr($statement, -10, 6);
echo '<br>';

$statement2 = 'This election will be the most important election in my lifetime!';
echo $statement2;
echo '<br>';
echo str_replace('my', 'our', $statement2);
echo '<br>';
echo str_replace('!', ', no kidding!', $statement2);

?>