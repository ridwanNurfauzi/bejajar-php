<?php

// Class Induk
class Kendaraan{

}

// Class Anak/turunan
class Motor extends Kendaraan{
    function Menyala(){
        echo "Motor Bisa Jalan";
    }
}

$motor = new Motor();
$motor->Menyala();

?>