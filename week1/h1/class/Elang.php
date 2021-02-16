<?php 

require_once 'Hewan.php';
require_once 'Fight.php';
class Elang{
    use Fight, Hewan;

    public function __construct()
    {
        $this->attack_power=10;
        $this->defense_power=5;
        $this->jumlah_kaki=2;
        $this->keahlian='Terbang Tinggi';
    }  
    public function set_Nama($nama){
        $this->nama = $nama;
    }
    public function get_NamaElang(){
        $this->nama;
    }
    public function getInfoHewan(){
        echo 'tes';
    }

}


?>