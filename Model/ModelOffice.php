<?php

class Office{
    public $nama;
    public $alamat;
    public $kota;
    public $telp;

    public function setnama($a){
		$this->nama = $a;
    }
    
    public function setalamat($a){
		$this->alamat = $a;
    }
    
    public function setkota($a){
		$this->kota = $a;
    }
    
    public function settelp($a){
		$this->telp = $a;
    }
}