<?php
//  class Person implementasi class Person 
class Person {
    protected $name;
    //method construct
    public function __construct($name) {
        $this->name = $name;
    }
    // get name
    public function getName() {
        return $this->name;
    }
    // get role
    public function getRole() {
        return "This is a person.";
    }
}

// implementasi class Dosen dan Mahasiswa dengan teknik inheritance
class Dosen extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNIDN() {
        return $this->nidn;
    }

    public function setNIDN($nidn) {
        $this->nidn = $nidn;
    }

    public function getRole() {
        return "Dosen: " . $this->name;
    }
    }
//class Mahasiswa mewarisi class Person
class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNIM() {
        return $this->nim;
    }

    public function setNIM($nim) {
        $this->nim = $nim;
    }

    public function getRole() {
         return "Mahasiswa: " . $this->name;
     }
}

// abstract class Jurnal
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    abstract public function submit();
}
// class JurnalDosen mewarisi Jurnal
class JurnalDosen extends Jurnal {
    public function submit() {
        return "Jurnal Dosen berjudul '" . $this->judul . "' telah disubmit.";
    }
}
// class JurnalMahasiswa mewarisi Jurnal
class JurnalMahasiswa extends Jurnal {
    public function submit() {
        return "Jurnal Mahasiswa berjudul '" . $this->judul . "' telah disubmit.";
    }
}

// instansi objek
$dosen = new Dosen("Dr. Akagami No Shanks", "4747474747");
$mahasiswa = new Mahasiswa("Luffy", "444444");
echo $dosen->getRole() . " dengan NIDN: " . $dosen->getNIDN() . "<br>";
echo $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNIM() . "<br>";

$jurnalDosen = new JurnalDosen("Penggunaan E-Learning oleh Mahasiswa dan Dosen");
$jurnalMahasiswa = new JurnalMahasiswa("Pemanfaatan Aplikasi Mobile untuk Pembelajaran Mandiri Mahasiswa");
echo $jurnalDosen->submit() . "<br>";
echo $jurnalMahasiswa->submit() . "<br>";
?>
