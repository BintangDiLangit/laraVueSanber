<?php

trait Fight{

    protected $attack_power;
    protected $defense_power;

    public function serang(){
        echo $this->nama . ' sedang menyerang ';
    }
    public function diserang(){
        echo $this->nama . 'sedang diserang';
        
    }
}
trait Hewan{
    protected $nama;
    protected $darah=50;
    protected $jumlah_kaki;
    protected $keahlian;

    public function atraksi(){
        echo $this->nama . ' sedang ' . $this->keahlian;
    }
}

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
    public function serang(){
        echo $this->nama . ' sedang menyerang ' . $this->get_NamaElang;
    }
    public function getInfoHewan(){
        echo 'tes';
    }
}

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


$elang = new Elang();
$elang->set_Nama('Elang_3');

// $elang->getInfoHewan();
$elang->atraksi();
echo '<br><br>';
$harimau = new Harimau();
$harimau->set_Nama('Harimau_1');
echo '<br>';
$harimau->atraksi();
echo '<br>';
$harimau->serang();
echo '<br>';
?>

