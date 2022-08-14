<?php
echo "<h1> Operators in php </h1>"; 
echo "<br>";

echo " <h3>1. Arithmetic operators</h3> ";
$a = 5; $b = 3;
echo "<br>";
echo "a = $a and b = $b <br>";
echo "a+b = ".($a+$b);
echo "<br>";
echo "a-b = ".($a-$b);
echo "<br>";
echo "a*b = ".($a*$b);
echo "<br>";
echo "a/b = ".($a/$b);
echo "<br>";
echo "a%b = ".($a%$b);
echo "<br>";
echo "a^b = ".($a**$b)." (** is used)";
echo "<br>";


echo " <h3>2. Assignment operators</h3> ";
$a+= ($a+$b);
echo "<br>";
echo "Now a = ".$a;
echo "<br>";


echo " <h3>3. Comparison operators</h3> ";
echo "<br>";
echo "for a==y , the res = <br>";
echo var_dump($a==$b);
echo "<br>";
echo "<> is notequal ";
echo "<br>";
echo "> is greater than ";
echo "<br>";
echo "< is less than ";
echo "<br>";
echo ">= is greater than  equal  to ";
echo "<br>";
echo "<= is less than equal  to ";
echo "<br>";


echo " <h3>4. Logical operators</h3> ";
echo "and --> both true for true";
echo "<br>";
echo "&& --> both true for true";
echo "<br>";
echo "or  --> if any 1 true for true";
echo "<br>";
echo "||  --> if any 1 true for true";
echo "<br>";
echo "!a (not a)";
echo "<br>";


 
?>