<?php
echo "<h1>If else conditionals </h1>";
$a = 34;
$b = 34;
if($a > $b){
    echo "$a is greater than $b";
}elseif($a == $b){
    echo "$a is equal to be $b";
}
else{
    echo "$a is less than $b";
}

echo "<h1> Done</h1> ";

$age = 26;

echo "Age is : $age <br>";
if($age>=25 && $age<=65){
    echo "You can drive .";
}else{
    echo "You can't drive .";
}


?>