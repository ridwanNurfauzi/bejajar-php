<?php

class Contoh{
    function __construct()
    {
        echo "Assalamualaikum.<br>";
    }

    function perkenalan($nama){
        echo "Nama saya ".$nama.".<br>";
    }

    function __destruct()
    {
        echo "Terima kasih.<br>";
    }
}

$contoh = new Contoh();
$contoh->perkenalan("Ridwan");  

?>