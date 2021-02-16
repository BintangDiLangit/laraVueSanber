<?php 

trait Hewan{
    protected $nama;
    protected $darah=50;
    protected $jumlah_kaki;
    protected $keahlian;

    public function atraksi(){
        echo $this->nama . ' sedang ' . $this->keahlian;
    }
}

?>