<?php

$jurusan = "TKRO";
$kelas = "X TKRO";

if ($jurusan == "TKRO") {
    if ($kelas == "X TKRO") {
        echo "Selamat datang di jurusan TKRO kelas X";
    } else if ($kelas == "XI TKRO") {
        echo "Selamat datang di jurusan TKRO kelas XI";
    } else if ($kelas == "XII TKRO") {
        echo "Selamat datang di jurusan TKRO kelas XII";
    } else {
        echo "Pilihan tidak ada";
    }
} else if ($jurusan == "TBSM") {
    if ($kelas == "X TBSM") {
        echo "Selamat datang di jurusan TBSM kelas X";
    } else if ($kelas == "XI TBSM") {
        echo "Selamat datang di jurusan TBSM kelas XI";
    } else if ($kelas == "XII TBSM") {
        echo "Selamat datang di jurusan TBSM kelas XII";
    } else {
        echo "Pilihan tidak ada";
    }
} else if ($jurusan == "RPL") {
    if ($kelas == "X RPL") {
        echo "Selamat datang di jurusan RPL kelas X";
    } else if ($kelas == "XI RPL") {
        echo "Selamat datang di jurusan RPL kelas XI";
    } else if ($kelas == "XII RPL") {
        echo "Selamat datang di jurusan RPL kelas XII";
    } else {
        echo "Pilihan tidak ada";
    }
} else {
    echo "Pilihan jurusan tidak ada";
}

?>