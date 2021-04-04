<?php
$nama = $_POST['nama'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$umur = $_POST['umur'];
$ubah = $tinggi * 0.01;
$jenis_kelamin = $_POST['jk'];
class BMIPasien {
    public $nama;
    public $umur;
    public $jenis_kelamin; 
    public $berat; 
    public $tinggi;
    public $ubah; 

    function __construct($berat, $ubah ) {
        $this->berat = $berat;
        $this->ubah = $ubah;
    }

    function hasilbmi() {
        return ($this->berat) / pow($this->ubah,2);                
    }

    function statusbmi(){
            if (($this->berat) / ($this->ubah * 2) >= 30.0){
            return "Kegemukan (Obesitas)";
        }
            if (($this->berat) / ($this->ubah * 2) >= 25.0){
            return "Kelebihan Berat Badan";                                       
        }
            if (($this->berat) / ($this->ubah * 2) >= 18.5){
            return "Normal (Ideal)";
        }
        if (($this->berat) / ($this->ubah * 2) >= 0){
            return "Kekurangan Berat Badan";
        }
    }
}
$BMIPasien = new BMIPasien($berat, $ubah );
$bmi = round($BMIPasien->hasilbmi(),1);
$status = ($BMIPasien->statusbmi());
?>