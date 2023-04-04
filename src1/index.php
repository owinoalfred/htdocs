

<p>
    This is a paragraph but below there is PHP
</p>

<?php
require "variable.php";
require "_is_auth.php";
require "operators.php";

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
}
?>
