<?php

interface engine{

    public function vroom($engineModel){
        echo "VROOOOMM";

    }
}

trait exhaust{
    public function smoke($CO2){
        echo "PWAAAAA";
    }
}

class Honda implements engine{
    use exhaust;

    public function smoke(){
        print "PWAAA";


    }
    public function vroom(){
        echo "vroom";
    }
}




?>