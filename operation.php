<?php

class operation{

    function add($n1,$n2){

        $total = $n1+$n2;
        echo "the numbers added together equals to ".$total;
    }

}

$a = new operation();
$a->add(1,2);

?>