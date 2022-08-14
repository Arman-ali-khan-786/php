<?php
   echo "<h1>Scopes in php :</h1>";
   $a = 44;
   $b = 34;
   $c = 17;
   echo "<br> a = $a & b = $b and c = $c <br>";
   echo "<br>";
   function fun(){
    echo "inside fun <br>";
    global $a,$b;
    $c = 59;
    echo " a = $a & b = $b and c = $c <br>";
    $a = 1;
    $b = 3;
    $c = 5;
    echo $GLOBALS['a'];
    echo "<br>";
    echo $GLOBALS['b'];
    echo "<br>";
    echo var_dump($GLOBALS);
    echo "<br>";
    // echo "<br> a = $a & b = $b and c = $c";
   }
   fun();
   echo "<br> a = $a & b = $b and c = $c <br>";
?>