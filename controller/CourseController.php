<?php
require_once '../model/Course.php';
require_once '../repository/CourseRepository.php';

class CourseController
{
    public function showAllCourses()
    {
        // Instantiate CourseRepository
        $courseRepository = new CourseRepository();

        // Fetch all courses
        $courses = $courseRepository->getAllCourses();

        // Render the courses page with the fetched courses
        include '../View/courses.php';
    }
}

// Usage example
$courseController = new CourseController();
$courseController->showAllCourses();
?>
