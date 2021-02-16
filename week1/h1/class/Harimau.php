<?php 

require_once 'Hewan.php';
require_once 'Fight.php';
class Harimau{
    use Fight, Hewan;

    public function __construct()
    {
        $this->attack_power=7;
        $this->defense_power=8;
        $this->jumlah_kaki=4;
        $this->keahlian='lari cepat';
    }
    public function set_Nama($nama){
        $this->nama = $nama;
    }
    public function get_NamaHarimau(){
        $this->nama;
    }
    public function serang($nama1, $nama2){
        echo $nama1 . ' sedang menyerang ' . $nama2;
    }
    public function getInfoHewan(){
        echo 'tes';
    }
}

 ?>