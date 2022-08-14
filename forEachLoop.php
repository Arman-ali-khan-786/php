<?php
echo "<h1>Foreach Loops examples </h1>";
$arr = array("banana", "apple" , "milk", "bread");
echo "Please bring the following from the market : <br>";
$i=1;
foreach ($arr as $thing){
    echo $i++.") $thing <br>";
}

?>