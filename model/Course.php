<?php
class Course
{
    private $course_id;
    private $title;
    private $description;
    private $instructor_id; // You may include more properties as needed

    // Constructor
    public function __construct($course_id, $title, $description, $instructor_id)
    {
        $this->course_id = $course_id;
        $this->title = $title;
        $this->description = $description;
        $this->instructor_id = $instructor_id;
    }

    // Getter methods
    public function getCourseId()
    {
        return $this->course_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getInstructorId()
    {
        return $this->instructor_id;
    }

    // Additional methods if needed
}
?>
