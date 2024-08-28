<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function tampilkanData() {
        return "Nama : $this->nama Nim : $this->nim, Jurusan : $this->jurusan";
    }

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    } 
}

$mhs = new Mahasiswa("Muhammad Bondan Rahardinata", "230202018", "Komputer dan Bisnis");
echo $mhs->tampilkanData();
?>