<!-- courses.php -->
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
    <?php
        include_once '../../repository/CourseRepository.php';
        include_once '../../repository/UserRepository.php';
		$courseRepository = new CourseRepository();
	    $courses = $courseRepository->getAllCourses();
        $userRepository = new UserRepository();
	?>


    <!-- Header -->
    <?php include '../layout/header.php'; ?>




    <!-- Courses Section -->
    <div class="container mt-5">
        <h2>All Courses</h2><br><br>
        <div class="row">
            <?php foreach ($courses as $course):
                $id = $course['instructor_id'];
                $instructor = $userRepository->getUserById($id);
            ?>
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <a href="single.php?course_id=<?php echo $course['course_id']; ?>" style="text-decoration: none; color: inherit;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <!-- Left side with image -->
                                    <img src="../../public/uploads/course/<?php echo $course['course_image_url']?>" class="card-img" alt="Course Image" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <!-- Right side with title, description, and instructor -->
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $course['title']; ?></h5>
                                        <p class="card-text"><?php echo $course['description']; ?></p>
                                        <p class="card-text"><small class="text-muted">Instructor: <?php echo $instructor['first_name'] . " " . $instructor['last_name']; ?></small></p>
                                        <!-- Add more details or buttons as needed -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



    <!-- Footer -->
    <?php include '../layout/footer.php'; ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
