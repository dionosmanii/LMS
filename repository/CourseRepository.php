<?php
require_once __DIR__ . '/../config/config.php'; // Make sure to include your database configuration
require_once __DIR__ . '/../model/Course.php';

class CourseRepository
{
    private $conn;

    public function __construct()
    {
        // Instantiate database connection using the configuration
        $connection = new config();
        $this->conn = $connection->startConnection();
    }

    public function getAllCourses()
    {
        try {
            $query = "SELECT * FROM Courses";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            // Fetch courses from the database
            $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Convert the result into Course objects
            $courseObjects = [];
            foreach ($courses as $course) {
                $courseObjects[] = new Course($course['course_id'], $course['title'], $course['description'], $course['instructor_id']);
            }

            return $courseObjects;
        } catch (PDOException $e) {
            // Handle database errors
            // Log or echo $e->getMessage() for debugging
            return [];
        }
    }
}
?>
