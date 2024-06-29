<?php

class Produk {
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduct() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}


class Komik extends Produk {
    public function getInfoProduct() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduct() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->waktuMain} Jam. ";
        return $str;
    }
}




$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann","Sonny Computer", 250000, 0, 50);

echo $produk1->getInfoProduct();
echo "<br>";
echo $produk2->getInfoProduct();