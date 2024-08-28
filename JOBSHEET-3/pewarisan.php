<?php
class Person {
    public $name;

    public function __construct($nama) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}
class Student  extends Person {
    private $name;
    private $studentD;

    public function getStudentID() {

    }

    public function getName() {
        return $this->name;
    }

    public function getstudentID() {
        return $this->getstudentID;
    }
}

class Teacher  extends Person {
    public $teacherID

    public function getName() {
        return $this->name;
    }

$person = new Person();
echo $person->getName();

}

abstract class Course {
    
    public function getCourseDetails() {

    }
}

class OnlineCourse {

    public function getCourseDetail() {

    }


}

class OfflineCourse {

    public function getCourseDetail() {
        
    }

}

$dog = new Dog("Buddy");
echo $god->getName() . "says" . $dog->makeSound();


?>