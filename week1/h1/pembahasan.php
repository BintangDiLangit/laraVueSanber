<?php 

    abstract class Hewan{
        public $nama, $darah=50, $jumlahKaki, $keahlian;
        public function __construct($nama)
        {
            $this->nama = $nama;
        }
        public function atraksi(){
            $str = $this->nama . " sedang " . $this->keahlian;
            return $str;
        }
        abstract public function getInfoHewan();

        public function getInfo(){
            $str = "Nama : $this->nama" . "<br>" .
                   "Darah : $this->darah" . "<br>" .
                   "Jumlah Kaki : $this->jumlahKaki" . "<br>" .
                   "Keahlian : $this->keahlian" . "<br>" ;
            return $str;
        }
    }

    trait Fight{
        public $attackPower, $defensePower;

        public function serang($hewan){
            echo "$this->nama sedang menyerang $hewan->nama" . "<br>";
            echo "===========================================" . "<br>";
            $hewan->diserang($this);
        }

        public function diserang($hewan){
            echo "$this->nama sedang diserang $hewan->nama" . "<br>";
            $this->darah = $this->darah - ($hewan->attackPower / $this->defensePower);
            echo "Darah $this->nama tersisa : $this->darah" . "<br>";
        }
    }

    class Harimau extends Hewan{
        use Fight;
        function __construct($nama)
        {
            parent::__construct($nama);
            $this->jumlahKaki = 4;
            $this->keahlian ='lari cepat';
            $this->attackPower = 7;
            $this->defensePower = 8;
        }

        public function getInfoHewan(){
            $str = $str =   "==== Harimau ====" . "<br>" . 
                            parent::getInfo() .
                            "Attack Power : $this->attackPower" . "<br>" .
                            "Defense Power : $this->defensePower" . "<br>" ;

            return $str;
        }
    }

    class Elang extends Hewan{
        use Fight;
        function __construct($nama)
        {
            parent::__construct($nama);
            $this->jumlahKaki = 2;
            $this->keahlian ='terbang tinggi';
            $this->attackPower = 10;
            $this->defensePower = 5;
        }
        public function getInfoHewan(){
            $str = "==== Elang ====" . "<br>" . 
                    parent::getInfo() .
                   "Attack Power : $this->attackPower" . "<br>" .
                   "Defense Power : $this->defensePower" . "<br>" ;

            return $str;
        }
    }

    $elang1 = new Elang("Elang Jawa");
    $harimau1 = new Harimau("Harimau Sumatra");
    echo $elang1->getInfoHewan();
    echo "<br>";
    echo $harimau1->getInfoHewan();
    echo "<br>";
    $elang1->serang($harimau1);
    echo "<br>";
    echo $harimau1->getInfoHewan();
    echo "<br>";
    $harimau1->serang($elang1);
    echo "<br>";
    echo $elang1->getInfoHewan();
    
?>