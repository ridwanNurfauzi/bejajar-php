<?php 

// Sebuah class
class Kucing {
    // Property/Attribut
    var $ras;
    var $warna;

    // Methode/function
    function makan($makanan){
        echo "Kucing suka makan $makanan";
    }
    function minum($minuman){
        echo "Kucing suka minum $minuman";
    }
}

// Object
// instansiansi
$cetak = new Kucing();

// cetak
$cetak->makan("sayur");
echo "<br>";
$cetak->minum("air");

?>