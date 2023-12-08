<!-- update.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Course</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <!-- Header -->
    <?php include '../layout/header.php'; 

    include_once '../../repository/CourseRepository.php';
    include_once '../../repository/UserRepository.php';
    $userRepository = new UserRepository();
    $courseRepository = new CourseRepository();
    $course_id = $_GET['course_id'];
    $course = $courseRepository->getCourseById($course_id);
    $id = $course['instructor_id'];
    $instructor = $userRepository->getUserById($id);
    
    ?>

    <!-- Update Course Form -->
    <div class="container mt-5">
        <h2>Update Course</h2><br><br>
        <form action="../../controller/CourseController.php" method="post">
            <!-- Add your form fields for course update -->
            <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $course['title']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required><?php echo $course['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="instructor">Instructor ID:</label>
                <input type="text" class="form-control" id="instructor" name="instructor_id" value="<?php echo $course['instructor_id']; ?>" required>
            </div>
            <button name="update" type="submit" class="btn btn-primary">Update Course</button>
        </form>

        <!-- Delete Course Button -->
        <form action="../../controller/CourseController.php" method="post" onsubmit="return confirm('Are you sure you want to delete this course?');">
            <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>">
            <button name="delete" type="submit" class="btn btn-danger mt-3">Delete Course</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
