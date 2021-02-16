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
?>