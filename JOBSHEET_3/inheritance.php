<?php
// class Person
class Person {
    protected $name;
    // method cunstruct
    public function __construct($name) {
        $this->name = $name;
    }

    // method getName untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
    }

// class Student mewarisi Person
class Student extends Person {
    public $studentID;

    // method construct
    public function __construct($name, $studentID) {
        // method construct dari kelas induk
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // method untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

// instansi objek
$student = new Student("Zoro", "999999");
echo "Name: " . $student->getName() . "<br>";
echo "Student ID: " . $student->getStudentID() . "<br>";
?>
