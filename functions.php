<?php
echo "<h1>Functions examples </h1>";
function processMarks ($Marks){
    $sum = 0 ;
    for($i = 0 ; $i< count($Marks) ; $i++){ // count() to get arr length
        $sum+=$Marks[$i];
    }
    return $sum;
}

$AhliaMarks = array(63,92,98,86,99);
$AlinaMarks = array(22,17,89,100,3);
$ahliaTotal = processMarks($AhliaMarks);
$alinaTotal = processMarks($AlinaMarks);
echo "Ahlia Total Marks out of 500 : $ahliaTotal <br>";
echo "Alina Total Marks out of 500 : $alinaTotal <br>";

echo "<h1>Date Function : </h1>";
$date = date("dS F Y");

echo "Today  is $date and day is ".date("l");
echo "<h2> Date formats : </h2>";
echo "1.) ".date(DATE_RFC2822)."<br>";
echo "2.) ".date("d-m-y h:i:s")."<br>";
echo "3.) ".date("d-m-y h:i:s A")."<br>";

?>