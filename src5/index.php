<body>


<?php
$numArray = [1,1,2,3,3,1,2,4,5,6,5,7,7];
#write a code to print the one that appears the least


#1. i will make an associative array associ1=>a


$associativeArr =[];
foreach ($numArray as $AR){
   if( $associativeArr[$AR]){
    $associativeArr[$AR]++;
   }
   else{
    $associativeArr[$AR]=1;
   }
}
?>
</body>

