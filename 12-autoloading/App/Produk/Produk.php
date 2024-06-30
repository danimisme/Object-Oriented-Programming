<?php

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