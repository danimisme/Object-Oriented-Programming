<?php

class Produk {
    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabels(){
        return "$this->penulis, $this->peberbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000);
$produk2 = new Produk("Uncharted", "Neil Druckmann","Sonny Computer", 250000);
var_dump($produk1);
var_dump($produk2);


?>