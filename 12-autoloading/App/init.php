<?php

// require 'Produk/InfoProduk.php';
// require 'Produk/CetakInfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Game.php';


spl_autoload_register(function ($class){
    require_once __DIR__ .'/Produk/' . $class . '.php';
});