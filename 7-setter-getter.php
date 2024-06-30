<?php

class Produk {
    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

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

    public function setDiskon($diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon /100);
    }

    public function setJudul ($judul){
        if( !is_string($judul)){
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }
    
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit() {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit() {
        return $this->penerbit;
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
    public $waktuMain;
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
echo "<hr>";


$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("judul baru");
$produk1->setPenulis("Bang Jago");
echo $produk1->getJudul();
echo "<br>";
echo $produk1->getPenulis();

