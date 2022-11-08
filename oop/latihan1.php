<?php

class BangunDatar
{
    var $luasPersegi = 0;
    var $luasPersegiPanjang = 0;
    var $luasSegitiga = 0;
    var $luasLingkaran = 0;
    var $luasJajarGenjang = 0;

    function luasPersegi($sisi)
    {
        $this->luasPersegi = $sisi * $sisi;
        echo "<h4>Luas Persegi</h4>";
        echo "Sisi : " . $sisi;
        echo "<br>";
        echo "Luas : " . $this->luasPersegi;

        echo "<hr>";
    }

    function luasPersegiPanjang($panjang, $lebar)
    {
        $this->luasPersegiPanjang = $panjang * $lebar;
        echo "<h4>Luas Persegi Panjang</h4>";
        echo "Panjang : " . $panjang;
        echo "<br>";
        echo "Lebar : " . $lebar;
        echo "<br>";
        echo "Luas : " . $this->luasPersegiPanjang;

        echo "<hr>";
    }

    function luasSegitiga($alas, $tinggi)
    {
        $this->luasSegitiga = ($alas * $tinggi) / 2;
        echo "<h4>Luas Segitiga</h4>";
        echo "Alas : " . $alas;
        echo "<br>";
        echo "Tinggi : " . $tinggi;
        echo "<br>";
        echo "Luas : " . $this->luasSegitiga;

        echo "<hr>";
    }

    function luasLingkaran($jariJari, $PI = 3.14)
    {
        $this->luasLingkaran = $jariJari * $jariJari * $PI;
        echo "<h4>Luas Lingkaran</h4>";
        echo "Jari-jari : " . $jariJari;
        echo "<br>";
        echo "Luas : " . $this->luasLingkaran;

        echo "<hr>";
    }

    function luasJajarGenjang($alas, $tinggi)
    {
        $this->luasJajarGenjang = $alas * $tinggi;
        echo "<h4>Luas Jajar Genjang</h4>";
        echo "Alas : " . $alas;
        echo "<br>";
        echo "Tinggi : " . $tinggi;
        echo "<br>";
        echo "Luas : " . $this->luasJajarGenjang;

        echo "<hr>";
    }
}

$bangunDatar = new BangunDatar();

$bangunDatar->luasPersegi(12);
$bangunDatar->luasPersegiPanjang(12, 10);
$bangunDatar->luasSegitiga(10, 16);
$bangunDatar->luasLingkaran(7);
$bangunDatar->luasJajarGenjang(10, 12);

?>