<?php
// definisi kelas 
class Mahasiswa {
    // attribute atau properti 
    public $nama;
    public $nim;
    public $jurusan;

    // metode atau function 
    public function tampilkanData($nama, $nim ) {
        return "Nama : $this->nama <br>Nim : $this->nim <br>Jurusan : $this->jurusan</br    >";
    }
}

// instansi objek 
$mhs = new Mahasiswa("Muhammad Bondan Raharidnata", "230202018", ">Komputer dan Bisnis");
echo $mhs->tampilkanData();

?>