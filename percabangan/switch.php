<?php

$lampu = "merah";

switch ($lampu) {
    case "merah":
        echo "Berhenti";
        break;

    case "kuning":
        echo "Bersiap-siap";
        break;

    case "hijau":
        echo "Maju";
        break;

    default:
        echo "Warna lampu tidak tersedia";
}
