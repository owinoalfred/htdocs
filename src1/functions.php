<?php
function mycalculator($num01, $oper, $num02){
    $sum = 0;

    switch ($oper){
        case 'add':
            $sum =  $num01 + $num02;
            break;

         case 'sub':
             $sum =  $num01 - $num02;
             break;

      default:
           $sum =  "there was an error";
           break;
    }
    return $sum;

}
$num01 = $_GET["num01"];
$num02 = $_GET["num02"];
$oper = $_GET["oper"];

echo "Value: " .mycalculator($num01, $oper, $num02);
?>