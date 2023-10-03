<?php
class kendaraan
{
    public $nama;

    public function start() {
        echo "kendaraan dimulai.";
    }
}
$mobil = new kendaraan();
$mobil -> nama = "mobil";
echo $mobil->nama;
$mobil->start();
?>