<?php
class hewan {
    protected $jenis;

    protected function tampilkanjenis() {
        return "Jenis Hewan : " . $this->jenis;
    }
}
class kucing extends hewan {
    public function setjenis($jenis){
        $this->jenis = $jenis;
    }
    public function info(){
        echo $this->tampilkanjenis();
    }
}

$kucing = new kucing();
$kucing->setjenis("kucing persia");
$kucing->info(); //outout = jenis hewan : kucing persia

?>