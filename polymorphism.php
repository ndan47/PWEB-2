<?php
// class Person
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// class Student mewarisi Person
class Student extends Person {
    public $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // override method getName untuk memberikan format khusus pada Student
    public function getName() {
        return "Student: " . $this->name;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}

// class Teacher mewarisi class Person
class Teacher extends Person {
    public $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // override method getName untuk memberikan format khusus pada Teacher
    public function getName() {
        return "Teacher: " . $this->name;
    }

    public function getTeacherID() {
        return $this->teacherID;
    }
}

// instansi objek
$student = new Student("Luffy", "444444");
$teacher = new Teacher("Grap", "666666");
echo $student->getName() . "<br>"; // output 
echo $teacher->getName() . "<br>"; // output
?>
