<!-- create.php -->
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your LMS Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/css/style.css"></head>

<body>
    <!-- Header -->
    <?php include '../layout/header.php'; ?>

    <!-- Create Course Form -->
    <div class="container mt-5">
        <h2>Create New Course</h2><br><br>
        <form action="../../controller/CourseController.php" method="post">
            <!-- Add your form fields for course creation -->
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="instructor">Instructor ID:</label>
                <input type="text" class="form-control" id="instructor" name="instructor_id" required>
            </div>
            <button type="submit" name="create" class="btn btn-primary">Create Course</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
