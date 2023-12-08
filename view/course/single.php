<!-- single.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your LMS Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <!-- Header -->
    <?php include '../layout/header.php'; ?>

    <!-- Single Course Details -->
    <div class="container mt-5">
        <?php
        // Get the course details based on the course_id from the URL
        include_once '../../repository/CourseRepository.php';
        include_once '../../repository/UserRepository.php';
        $userRepository = new UserRepository();
		$courseRepository = new CourseRepository();
        $course_id = $_GET['course_id'];
        $course = $courseRepository->getCourseById($course_id);
        $id = $course['instructor_id'];
        $instructor = $userRepository->getUserById($id);
        
        
        if ($course):
        ?>
            <h2><?php echo $course['title']; ?></h2>
            <p><strong>Description:</strong> <?php echo $course['description']; ?></p>
            <p><strong>Instructor:</strong> <?php echo $instructor['first_name'] . " " . $instructor['last_name'] ; ?></p>
            <!-- Display other course details as needed -->

            <!-- Update Course Button -->
            <a href="update.php?course_id=<?php echo $course['course_id']; ?>" class="btn btn-primary">Update Course</a>
        <?php else: ?>
            <p>Course not found.</p>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <?php include '../layout/footer.php'; ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
