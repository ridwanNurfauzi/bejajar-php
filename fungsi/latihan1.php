<?php
/*
Persegi
persegi panjang
segitiga
lingkaran
jajargenjang
*/

function luasPersegi($sisi)
{
    $luas = $sisi * $sisi;
    echo "<h4>Luas Persegi</h4>";
    echo "Sisi : " . $sisi;
    echo "<br>";
    echo "Luas : " . $luas;

    echo "<hr>";
}

function luasPersegiPanjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    echo "<h4>Luas Persegi Panjang</h4>";
    echo "Panjang : " . $panjang;
    echo "<br>";
    echo "Lebar : " . $lebar;
    echo "<br>";
    echo "Luas : " . $luas;

    echo "<hr>";
}

function luasSegitiga($alas, $tinggi)
{
    $luas = ($alas * $tinggi) / 2;
    echo "<h4>Luas Segitiga</h4>";
    echo "Alas : " . $alas;
    echo "<br>";
    echo "Tinggi : " . $tinggi;
    echo "<br>";
    echo "Luas : " . $luas;

    echo "<hr>";
}

function luasLingkaran($jariJari, $PI = 3.14)
{
    $luas = $jariJari * $jariJari * $PI;
    echo "<h4>Luas Lingkaran</h4>";
    echo "Jari-jari : " . $jariJari;
    echo "<br>";
    echo "Luas : " . $luas;

    echo "<hr>";
}

function luasJajarGenjang($alas, $tinggi)
{
    $luas = $alas * $tinggi;
    echo "<h4>Luas Jajar Genjang</h4>";
    echo "Alas : " . $alas;
    echo "<br>";
    echo "Tinggi : " . $tinggi;
    echo "<br>";
    echo "Luas : " . $luas;

    echo "<hr>";
}

luasPersegi(12);
luasPersegiPanjang(12, 10);
luasSegitiga(10, 16);
luasLingkaran(7);
luasJajarGenjang(10, 12);
