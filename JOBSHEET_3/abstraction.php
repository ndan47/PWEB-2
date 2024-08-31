<?php
// class abstrak Course
abstract class Course {
    protected $courseName;

    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    // method abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
    }

    // class OnlineCourse yang mengimplementasikan getCourseDetails
class OnlineCourse extends Course {
    private $platform;

    public function __construct($courseName, $platform) {
        parent::__construct($courseName);
        $this->platform = $platform;
    }

        public function getCourseDetails() {
            return "Online Course: " . $this->courseName . " via " . $this->platform;
    }
}

// class OfflineCourse yang mengimplementasikan getCourseDetails
class OfflineCourse extends Course {
    private $location;

    public function __construct($courseName, $location) {
        parent::__construct($courseName);
        $this->location = $location;
    }

    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . " at " . $this->location;
    }
}

// instansi objek
$onlineCourse = new OnlineCourse("PHP Programming", "Udemy");
$offlineCourse = new OfflineCourse("Java Programming", "Campus A");
echo $onlineCourse->getCourseDetails() . "<br>";  // output
echo $offlineCourse->getCourseDetails() . "<br>"; // output
?>
