# DOKUMENTASI OOP
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object digunakan untuk memodelkan masalah dunia nyata ke dalam kode program.

## Encapstion
Enkapsulasi adalah konsep di mana data (atribut) dan kode (metode) dikemas bersama dalam satu unit, yaitu kelas. Ini juga mencakup pengaturan visibilitas data dengan menggunakan modifier akses seperti public, protected, dan private.
```php
<?php
    // attribute atau properti yang bersifat akses private
    private $nama;
    private $nim;
    private $jurusan;
```

## Inheritance (Pewarisan)
Kelas dapat mewarisi atribut dan metode dari kelas lain. Kelas yang mewarisi disebut sebagai kelas turunan atau subclass, sedangkan kelas yang diwarisi disebut sebagai kelas dasar atau superclass

```php
<?php
// class dosen yang mewarisi dari class pengguna
class Dosen extends Pengguna {
    // attribute atau properti yang bersifat akses private 
    private $matakuliah;
```

## Polymorphhism 
Polimorfisme memungkinkan objek dari berbagai kelas untuk diakses melalui antarmuka yang sama. Ini memungkinkan metode dengan nama yang sama untuk berperilaku berbeda berdasarkan objek yang memanggilnya
```php
<?php
$aksesPengguna = new Pengguna(); 
$aksesDosen = new Dosen(); 
$aksesMhs = new Mahasiswa();
// output
echo $aksesPengguna->aksesFitur();
echo $aksesDosen->aksesFitur();
echo $aksesMhs->aksesFitur();
```

## Abstraction
Abstraksi adalah konsep dalam Pemrograman Berorientasi Objek (OOP) yang memungkinkan untuk menyembunyikan rincian implementasi dan hanya menampilkan fungsionalitas penting dari objek kepada pengguna. 
```php
<?php
// definisi abstrak class pengguna
abstract class Pengguna {
    // construct
    public function __construct() {
    }
    abstract public function aksesFitur();
}
```
