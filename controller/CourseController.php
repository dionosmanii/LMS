<?php
require_once '../repository/CourseRepository.php';

class CourseController
{
    private $courseRepository;

    public function __construct()
    {
        // Instantiate CourseRepository
        $this->courseRepository = new CourseRepository();
    }

    public function createCourse($title, $description, $instructor_id)
    {
        // Create a new course
        $result = $this->courseRepository->createCourse($title, $description, $instructor_id);

        // Check if the course creation was successful
        if ($result) {
            // Redirect to the courses page or show success message
            header('Location: ../view/course/courses.php');
            exit();
        } else {
            // Redirect to an error page or show an error message
            echo "Error: Unable to create the course.";
            exit();
        }
    }

    public function updateCourse($course_id, $title, $description, $instructor_id)
    {
        // Update the course
        $result = $this->courseRepository->updateCourse($course_id, $title, $description, $instructor_id);

        // Check if the course update was successful
        if ($result) {
            // Redirect to the courses page or show success message
            header('Location: ../view/course/courses.php');
            exit();
        } else {
            // Redirect to an error page or show an error message
            echo "Error: Unable to update the course.";
            exit();
        }
    }

    public function deleteCourse($course_id)
    {
        // Delete the course
        $result = $this->courseRepository->deleteCourse($course_id);

        // Check if the course deletion was successful
        if ($result) {
            // Redirect to the courses page or show success message
            header('Location: ../view/course/courses.php');
            exit();
        } else {
            // Redirect to an error page or show an error message
            echo "Error: Unable to delete the course.";
            exit();
        }
    }
}

// Instantiate CourseController
$courseController = new CourseController();

// Check the action 
if (isset($_POST['create'])) {
    // Call createCourse method
    $courseController->createCourse($_POST['title'], $_POST['description'], $_POST['instructor_id']);
} elseif (isset($_POST['update'])) {
    // Call updateCourse method
    $courseController->updateCourse($_POST['course_id'],$_POST['title'], $_POST['description'], $_POST['instructor_id']);
} elseif (isset($_POST['delete'])) {
    // Call createCourse method
    $courseController->deleteCourse($_POST['course_id']);
}
?>
