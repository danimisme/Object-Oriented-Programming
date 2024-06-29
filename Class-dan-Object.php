<?php 

class Produk {
    public $judul= "judul", 
            $penulis= "penulis",
            $penerbit= "penerbit",
            $harga= 0;

    public function getLabel() {
        return "Judul : $this->judul, Penullis : $this->penulis";
    }
}



$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishmoto";
$produk3-> penerbit = "Shonen Jump";
$produk3-> harga = 300000;

$produk1 = new Produk();
$produk1->judul = "Uncharted";
$produk1->penulis = "Neil Drukmann";
$produk1->penerbit = "Sony Computer";
$produk1->harga = 250000;

echo $produk3->getLabel();
echo "<br>";
echo $produk1->getLabel();

?>