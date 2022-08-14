<?php
    echo "<h1>While Loops examples </h1>";
    $n = 11;
    while($n<21){
        echo $n++ ." <br>";
    }
    echo "Pattern 1 : <br>";
    $n = "*";
    $i = 1;
    while($i<=5){
        $j = 1;
        while($j<= $i){
            echo $n."";
            $j++;
        }
        $i++;
        echo "<br>";
    }
?>