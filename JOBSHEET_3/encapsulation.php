<?php
// class Person 
class Person {
    protected $name;
    //method constuct
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}
    
// class Student 
class Student extends Person {
    private $studentID;
    //method construct
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // get untuk studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // set untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // get untuk name (di-override untuk menampilkan format khusus)
    public function getName() {
        return "Student: " . $this->name;
    }

    // set untuk name
    public function setName($name) {
        $this->name = $name;
    }
}

// instansi objek
$student = new Student("Zoro", "999999");
// akses data melalui metode getter
echo $student->getName() . "<br>";       // output
echo $student->getStudentID() . "<br>";  // output

// mengubah data melalui metode setter
$student->setName("Sanji");
$student->setStudentID("111111");
// tammpilan data yang sudah diubah
echo $student->getName() . "<br>";       // output
echo $student->getStudentID() . "<br>";  // output
?>
