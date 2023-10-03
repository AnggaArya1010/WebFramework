<?php
class mobil
{
    private $kecepatan = 0;

    private function tampilkankecepatan(){
        return "kecepatan" . $this->kecepatan . "km/jm";
    }
    public function tambahkecepatan($nilai){
        $this->kecepatan += $nilai;
        echo $this ->tampilkankecepatan();
    }
}

class contoh{
    private function privatemethod() {
        echo "ini adalah private method.";
    }
    public function publicmethod() {
        //mengakses private method dari dalam kelas
        $this->privatemethod();
    }
}

$mobil = new mobil();
$mobil->tambahkecepatan(50); //output : kecepatan 50
echo $mobil->tampilkankecepatan(); //akan menghasilkan eror karna private

$contoh = new contoh();
$contoh->publicmenthod(); // ini adalaah private method
?> 