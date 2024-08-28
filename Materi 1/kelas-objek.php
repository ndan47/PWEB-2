<?php
// definisi kelas 
class Buku {
    // attribute atau properti 
    public $judul;
    public $penulis;

    // construct 
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    // metode atau function 
    public function tampilkanInfo() {
        return "Judul: $this->judul <br>Penulis: $this->penulis";
    }
}

// instansi objek 
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->tampilkanInfo();

?>