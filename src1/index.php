

<p>
    This is a paragraph but below there is PHP
</p>

<?php
require "variable.php";
require "_is_auth.php";
require "operators.php";
require "conditionals.php";
require "forloops.php";

echo "<h1>PHP is realy hard</h1>";
echo "<h2>Hello  World<h2>";
if (1==1){
    print "<h1>yes this is the main thing that can be of the last ones that i do</h1>";
    echo "What can 1 be equal to 0 ";
    echo 4+3;
    echo $age;
    if ($is_auhenticated){
        print "<p>you are authenticated!</p>";
    }
    echo "/<h1>$total_stock</h1>";
    echo '/<h1>1==1</h1>';
    $sirName = 'this is the man';
    $lastName = $sirName . " is called alfred";
} echo "<h1>$lastName</h1>";

if ($firstNumber != $secondNumber){
    echo "/<h2> This is a statement stating that they are not equal</h2>";
}
else {
    echo "/<h2> This is a statement stating that they are equal</h2>";
   
}


for ($i = 0; $i < 10; $i++){
    echo " this will run ". $i;
}
?>
