<?php 
require_once('Fight.php');
class Hewan{
    protected $nama;
    protected $darah=50;
    protected $jumlah_kaki;
    protected $keahlian;

    use Fight;
    public function __construct($nama, $jumlah_kaki, $keahlian, $atk, $def)
    {
        $this->nama = $nama;
        $this->jumlah_kaki = $jumlah_kaki;
        $this->keahlian = $keahlian;

        $this->attack_power = $atk;
        $this->defense_power = $def;
    }
    public function get_darah()
    {
        return $this->darah;
    }

    public function set_darah($darah_current)
    {
        $this->darah = $darah_current;
    }

    public function get_nama()
    {
        return $this->nama;
    }

    public function get_keahlian()
    {
        return $this->keahlian;
    }

    public function atraksi()
    {
        echo $this->nama." sedang ".$this->keahlian;
    }
}

?>