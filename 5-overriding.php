<?php

class Produk {
    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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

    public function __construct ($judul ="judul", $penulis = "penulis", $penerbit="penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoProduct() {
        $str = "Komik : ". parent::getInfoProduct() ." - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}

class Game extends Produk {
    public function __construct ($judul ="judul", $penulis = "penulis", $penerbit="penerbit", $harga = 0, $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduct() {
        $str = "Game : ". parent::getInfoProduct() ." - {$this->waktuMain} Jam. ";
        return $str;
    }
}




$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann","Sonny Computer", 250000, 50);

echo $produk1->getInfoProduct();
echo "<br>";
echo $produk2->getInfoProduct();