<?php
   echo "<h1>Multi-Dimensional  Arrays examples </h1>";
   $mDemArr = array(
      array(1,2,3),
      array(2,4,6),
      array(5,1,5)
   );
   echo "<br>";
   echo var_dump($mDemArr);
   echo "<br>";
   echo $mDemArr[2][1];
   echo "<br>";
   echo "<br>";


   // for ($i=0; $i <count($mDemArr) ; $i++) { 
   //    # code...
   //    echo var_dump($mDemArr[$i]);
   //    echo "<br>";
   // }

   for($i = 0 ; $i< count($mDemArr);$i++){
      for($j = 0 ; $j < count($mDemArr[$i]); $j++){
         echo $mDemArr[$i][$j]."&nbsp;&nbsp;&nbsp;&nbsp;";
      }
      echo "<br>";
   }



?>