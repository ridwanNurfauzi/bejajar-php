<?php

class manusia{
    private $nama = "Ridwn";

    private function datadiri(){
        echo "Nama : ".$this->nama;
    }
    public function tampil(){
        $this->datadiri();
    }
}

$cetak = new manusia();

$cetak->tampil(); 

?>