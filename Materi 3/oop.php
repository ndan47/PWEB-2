<?php
class Karyawan {
    protected $nama;
    protected $nik;
    public $divisi;

    public function tampilkanData() {
        echo "Divisi : ".
        $this->divisi;
    }

}


$karyawan = new Karyawan();
$karyawan->divisi = "Welder";
echo $karyawan->tampilkanData();
?>

