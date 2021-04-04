<?php
class persegip {
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function getLuas(){
        return  $this->panjang *  $this->lebar;
    }
    function getKeliling(){
        return ($this->panjang * 2) + ($this->lebar * 2);
    }
}
?>