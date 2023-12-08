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
            // $courseObjects = [];
            // foreach ($courses as $course) {
            //     $courseObjects[] = new Course($course['course_id'], $course['title'], $course['description'], $course['instructor_id']);
            // }

            return $courses;
        } catch (PDOException $e) {
            // Handle database errors
            // Log or echo $e->getMessage() for debugging
            return [];
        }
    }


    public function createCourse($title, $description, $instructor_id)
    {
        try {
            $query = "INSERT INTO Courses (title, description, instructor_id) VALUES (:title, :description, :instructor_id)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':instructor_id', $instructor_id);
            $stmt->execute();

            // Return the newly created course ID
            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            // Handle database errors
            // Log or echo $e->getMessage() for debugging
            return false;
        }
    }

    public function updateCourse($course_id, $title, $description, $instructor_id)
    {
        try {
            $query = "UPDATE Courses SET title = :title, description = :description, instructor_id = :instructor_id WHERE course_id = :course_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':instructor_id', $instructor_id);
            $stmt->bindParam(':course_id', $course_id);
            $stmt->execute();

            // Return true on success
            return true;
        } catch (PDOException $e) {
            // Handle database errors
            // Log or echo $e->getMessage() for debugging
            return false;
        }
    }


    public function deleteCourse($course_id)
    {
        try {
            $query = "DELETE FROM Courses WHERE course_id = :course_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':course_id', $course_id);
            $stmt->execute();

            // Return true on success
            return true;
        } catch (PDOException $e) {
            // Handle database errors
            // Log or echo $e->getMessage() for debugging
            return false;
        }
    }

    public function getCourseById($course_id)
    {
        try {
            $query = "SELECT * FROM Courses WHERE course_id = :course_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':course_id', $course_id);
            $stmt->execute();
    
            // Fetch the course from the database
            $course = $stmt->fetch(PDO::FETCH_ASSOC);
    
            return $course;
        } catch (PDOException $e) {
            // Handle database errors
            // Log or echo $e->getMessage() for debugging
            return null;
        }
    }

}
?>


