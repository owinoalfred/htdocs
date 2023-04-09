<?php


$mememory_cahed = new Memcached();
$mememory_cahed -> addServer('localhost', 1221);
$mememory_cahed->set($myKey, $myValue, 3600);#connects for one hour
$myValue = $mememory_cahed($myKey);

if($myValue == false){
    echo "Nasing is here";
}
else {
    echo "Yes the thing is conneecting";
}

?>