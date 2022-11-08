<?php 

class Kucing{
    var $ras = "Kampung";
    var $warna = "Kuning";

    function Ciri(){
        echo "Jenis kucing Adalah : ".$this->ras;
        echo "<br>";
        echo "Warna kucing Adalah : ".$this->warna;
    }
}
$cetak = new Kucing();

$cetak->Ciri();

?>