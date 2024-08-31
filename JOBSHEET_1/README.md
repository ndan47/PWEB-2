# Kelas dan Objek

Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek
(OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek, sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat digunakan kembali.

## Class 
Class adalah template atau blueprint untuk membuat objek. Kelas mendefinisikan atribut dan metode yang dimiliki oleh objek
```php
<?php
// definisi kelas 
class Mahasiswa {
```
## Constructor
Konstruktor adalah metode khusus yang dipanggil secara otomatis saat objek dibuat. Konstruktor digunakan untuk menginisialisasi objek dengan nilai awal
```php
<?php
    // constructor
    public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    }

```

## Metode tampilkan data
Metode tampilkanData digunakan untuk mengakses dan menampilkan data dari atribut atau properti objek. Ini adalah cara untuk memperlihatkan informasi yang terkandung dalam objek kepada pengguna atau untuk debugging

```php
<?php
    // metode atau function 
    public function tampilkanData() {
        return "Nama : $this->nama <br>Nim : $this->nim 
```

## Penggunaan Attribute
Atribut adalah variabel yang dimiliki oleh kelas. Atribut ini menggambarkan keadaan atau karakteristik objek
```php
<?php
    // attribute atau properti 
    public $nama;
    public $nim;
    public $jurusan;
```
## Instansiasi objek
Untuk membuat objek baru dari kelas,menggunakan operator new diikuti dengan nama kelas dan, argumen untuk konstrukto
```php
// instansiasi objek
$dosen = new Dosen("Pak Abda'u", "32436554", "Praktikuk WEB-2");
echo $dosen->tampilkanDosen();
```
## Tugas Mandiri 2
```php
<?php
// definisi kelas 
class Dosen {
    // attribute atau properti 
    public $nama;
    public $nip;
    public $mataKuliah;

    // metode atau function 
    public function tampilkanDosen() {
        return "Nama : $this->nama <br>Nip : $this->nip <br>Matakulliah : $this->mataKuliah</br>";
    }

    // constructor
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
}

// instansiasi objek
$dosen = new Dosen("Pak Abda'u", "32436554", "Praktikuk WEB-2");
echo $dosen->tampilkanDosen();
?>
```
