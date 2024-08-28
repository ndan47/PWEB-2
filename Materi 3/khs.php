<?php
class Matakuliah {
    protected $codeMk;
    public $nama_matkul;
    protected $sks;

    public function tampilMatakuliah() {
        $this->$nama_matkul;
    }

}

$matakuliah = new Matakuliah();
$matakuliah->nama_matkul = "pw2";
echo $matakuliah->tampilMatakuliah();

?>