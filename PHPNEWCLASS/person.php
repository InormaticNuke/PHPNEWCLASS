<?php

class person {

    var $name;
    var $age;


    function eat($food){
        echo "I eat ".$food;
    }


}



$inf = new person();
$inf->eat("a completo");



?>