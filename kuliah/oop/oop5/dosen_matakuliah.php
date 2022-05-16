<?php 
require_once 'dosen.php';
require_once 'matakuliah.php';

class DosenMatakuliah{
    public $semester;
    public $dosen;
    public $matakuliah;
    public $hari;
    public $ruangan;

    function __construct($dosen,$matakuliah,$semester){
        $this->dosen = $dosen;
        $this->matakuliah = $matakuliah;
        $this->semester = $semester;
    }
}