<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function add(...$numbers){
    $sum= 0;

    foreach($numbers as $n){
        $sum+=$n;

    }
    return $sum;
}

$ages = array("Peter"=> 55, "James"=>90, "Filemon" =>99);
echo "<h1>$ages[Peter]<br></br> $ages[James]</h1>";
echo add(33,34,56,75,10000)."<br></br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

$my_name_alfred = "alfredowino";
echo strlen($my_name_alfred)."<br>";
echo ucfirst($my_name_alfred)."<br>";
echo lcfirst($my_name_alfred)."<br>";
echo strtolower($my_name_alfred)."<br>";
echo strtoupper($my_name_alfred)."<br>";

include("menu.html"); 
require('menu.html');
include("welcome.php");  

setcookie("name" ,"Alfred");
$_COOKIE[] = "alfed";

echo "<h1>$_COOKIE</h1>";

$to = 'ogzialfred@gmail.com';
$subject = "HEllo Man";
$message = "Re PHP trials";


$result =  mail($to,$subject,$message);  

if ($result==true){
    print('Thi is successful');
}
else{
    print("this is false");
}


echo gettype(10);
?>

</body>
</html>