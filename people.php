<?php

class people{
    public $name;
    public $age;

    function __constructo($name,$age){
        $this->name =$name;
        $this->age =$age;
    }

    function information1($name,$age){
        echo "Name: ".$name."<br>";
        echo "Age: ".$age."<br>";
    }

    function information2($name,$age){
        echo "Name: ".$name."<br>";
        return "Age: ".$age."<br>";
    }
}

$objP = new people("Dickson",21);
echo $objP->name."<br>";
echo $objP->age."<br>";

$objP->information1("Jamon Lopez",25);
echo "<br>";

$data=$objP->information2("Joseph",38);
echo $data;

?>