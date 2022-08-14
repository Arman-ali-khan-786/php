<?php
echo "<h1>Associative Arrays examples </h1>";
$favColor = array(
    'Arman' => 'red', // red color is associated with Arman
    'Ratnesh' => 'blue',
    9 => 'Green'
);
echo "<br>";
echo $favColor['Arman'];
echo "<br>";
echo $favColor[9];
echo "<br>";

echo "Looping through : ";
echo "<br>";
foreach($favColor as $key => $color) {
    echo "Favourite color of $key is $color .<br>";
}

?>