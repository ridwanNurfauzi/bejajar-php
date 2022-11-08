<?php

// function perkenalan(){
//     echo "Nama : Ridwan Nurfauzi<br>";
//     echo "Usia : 16 Tahun";
// }

// perkenalan();

function perkenalan($nama, $tempatLahir, $tanggalLahir, $alamat, $jenisKelamin, $agama)
{
    echo "Nama : " . $nama;
    echo "<br>";
    echo "Tempat Lahir : " . $tempatLahir;
    echo "<br>";
    echo "Tanggal Lahir : " . $tanggalLahir;
    echo "<br>";
    echo "Alamat : " . $alamat;
    echo "<br>";
    echo "Jenis Kelamin : " . $jenisKelamin;
    echo "<br>";
    echo "Agama : " . $agama;
}

perkenalan("M. Ridwan", "Bandung", "3 Mei 2006", "Ds. Rancamanyar", "Laki-laki", "Islam");


?>