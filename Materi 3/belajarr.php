<?php
// definisi kelas 
class Mahasiswa {
    // attribute atau properti 
    public $nama;
    public $nim;
    public $jurusan;

    // metode atau function 
    public function tampilkanData() {
        return "Nama : $this->nama <br>Nim : $this->nim <br>Jurusan : $this->jurusan</br>";
    }

    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // constructor
    public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// instansi objek 
$mhs = new Mahasiswa("Muhammad Bondan Raharidnata", "230202018", "Komputer dan Bisnis");
echo $mhs->tampilkanData();
$mhs->updateJurusan("BISNIS dan KOMPUTER");
echo $mhs->tampilkanData();
$mhs->setNIm("999999999");
echo $mhs->tampilkanData(); 
?>