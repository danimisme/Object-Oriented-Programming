<?php

interface InfoProduk{
    public function getInfoProduk();
}

abstract class Produk {
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

    public function getInfo() {
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


class Komik extends Produk implements InfoProduk {

    public function __construct ($judul ="judul", $penulis = "penulis", $penerbit="penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoProduk() {
        $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}

class Game extends Produk implements InfoProduk {
    public $waktuMain;
    public function __construct ($judul ="judul", $penulis = "penulis", $penerbit="penerbit", $harga = 0, $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : ". $this->getInfo() ." - {$this->waktuMain} Jam. ";
        return $str;
    }
}

class CetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk ){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK: <br>";
    
        foreach ($this->daftarProduk as $p ){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann","Sonny Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();



