<?php 

define('NAMA', 'Muhammad Subhan');
echo NAMA;

echo "<br>";

const UMUR = 32;
echo UMUR;

echo "<br>";

class Coba {
    const NAMA = "Dhani";
}

echo Coba::NAMA;
echo "<br>";

echo __LINE__;
echo "<br>";

echo __FILE__;
echo "<br>";

function coba() {
    return __FUNCTION__;
}

echo coba();

Class CobaKelas {
    public $kelas = __CLASS__;
}

echo "<br>";

$obj1 = new CobaKelas();
echo $obj1->kelas;


?>