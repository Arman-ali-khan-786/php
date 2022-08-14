<?php
echo "<h1>Switch Case examples </h1>";
echo "<h2>Lets see what's your grade is ?   </h2>";
$marks = 98;
echo "<h3>Your marks (in %) : $marks</h3>";
switch($marks){
    case ($marks>=90 && $marks<=100) : 
        echo "Grade : A";
        break;
    case ($marks>=80 && $marks<90) : 
        echo "Grade : B";
        break;
    case ($marks>=70 && $marks<80) : 
        echo "Grade : C";
        break;
    case ($marks>=60 && $marks<70) : 
        echo "Grade : D";
        break;
    case ($marks>=50 && $marks<60) : 
        echo "Grade : E";
        break;
    default :
        echo "FAIL";
        break;
}

?>