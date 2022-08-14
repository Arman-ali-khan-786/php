<?php
echo "<h1>For Loops examples </h1>";
for($i = 1 ; $i<=5 ; $i++){
    for($j = $i ; $j <= 5 ; $j++ ){
        echo "*";
    }
    echo "<br>";
}
for($i = 2 ; $i<=5 ; $i++){
    for($j = 1 ; $j <= $i ; $j++ ){
        echo "*";
    }
    echo "<br>";
}

?>